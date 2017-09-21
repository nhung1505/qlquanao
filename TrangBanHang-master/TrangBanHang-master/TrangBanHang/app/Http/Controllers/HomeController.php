<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Hash;
use Auth;

class HomeController extends Controller
{
    public function getIndex(){
        $slides = Slide::all();
        $newProducts = Product::where('new',2)->paginate(6);
        $hotProducts = Product::where('new',1)->paginate(4);
        $categories = Category::with("products")->get();
       return view('pages.TrangChu',compact('hotProducts','slides','newProducts','categories'));
    }

    public function addtoCart(Request $req,$id){
        $product = Product::find($id);
        if($product){
            $oldCart = Session('cart')?Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $cart->add($product, $id);
            $req->session()->put('cart',$cart);
        } else{
            return view("error.404");
        };
        return redirect()->back();
    }
    public function delItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout(){
        return view('pages.DatHang');
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');
        $email = $req->input('email');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->customer_id = $customer->id;
        $bill->order_date = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->bill_id = $bill->id;
            $bill_detail->product_id = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->price = $value['price'];
            $bill_detail->save();
        }

//        $data = ['content'=>$cart->items,'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty];
//        Mail::send('mails.order',$data,function ($message) use ($email){
//            $message->from('phanchaudhv@gmail.com','@Amobile');
//            $message->to($email)->subject('Đơn hàng của bạn tại @Amobile');
//        });

        Session::forget('cart');
        echo "<script>
                alert('Cảm ơn bạn đã đặt hàng. Nhân viên của chúng tôi sẽ liên lạc với bạn sau ít phút nữa. Bạn có thể check lại đơn hàng của bạn trong Email !');
                window.location ='".url('/')."'
               </script>";

    }

    public function login(){
        return view('pages.DangNhap');
    }

    public function Signin(){
        return view('pages.DangKy');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $kiemtra = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($kiemtra)){
            return redirect()->route('trang-chu');
        }else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }


    }


    public function postSignin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }

    public function postLogout_admin(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function getSearch(Request $req){
        $loaisp = Category::all();
        $products = Product::where('name','like','%'.$req->key.'%')
                            ->orWhere('price',$req->key)
                            ->get();
        return view('pages.search',compact('products','loaisp'));
    }


}
