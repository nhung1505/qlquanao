<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showList(){
        $categories = Category::all();
        //liên kết 2 bảng bằng phương thức product_type trong model Product
        $products = Product::with('Category')->get();
        return view('admin.product.list',["products" => $products, "categories" => $categories]);
    }

    public function showAddForm(){
        $categories = Category::all();
        return view('admin.product.add',["categories" => $categories]);
    }

    public function add(Request $request){
        $product = new Product();
        $product->name = $request->input('name');;
        $product->category_id = $request->input('type');
        $product->price = $request->input('price');
        $product->new = $request->input('new');
        $product->description = $request->input('description');
        $product->unit = $request->input('unit');
        $image=$request->file("image");
        if ($request->hasFile('image')){
            $image->move('/images/',$image->getClientOriginalName());
            $product->image=$image->getClientOriginalName();
        }else{
            return view('error.error_image');
        }
        $product->save();
        return redirect(route('show.list.product'));
    }
    public function edit(Request $request,$id){
        $product = Product::find($id);
        if($product){
            $product->name = $request->input('nameproduct');
            $product->category_id = $request->input('type');
            $product->price = $request->input('price');
            if($request->hasFile('image')){
                $image = $request->file("image");
                $image->move('/images/',$image->getClientOriginalName());
                $product->image=$image->getClientOriginalName();
            }
            $product->new = $request->input('new');
            $product->description = $request->input('description');
            $product->unit = $request->input('unit');
            $product->save();
            return redirect(route('show.list.product'));
        }else {
            return view('error.404', ["message" => "Product not found"]);
        }
    }

    public function showEditForm(Request $request,$id){
        $product = Product::find($id);
        $categories = Category::all();
        if($product){
            return view('admin.product.edit',["product" => $product,"categories" => $categories]);
        }else{
            return view('error.404', ["message" => "Product not found"]);
        }

    }

    public function showDeleteForm(Request $request,$id){
        $product = Product::find($id);
        return view("admin.product.delete",["product" => $product]);
    }

    public function delete(Request $request,$id){
        $product = Product::find($id);
        $product->delete();
        return redirect(route("show.list.product"));
    }

    public function showListProductByType(Request $request,$id){
            $categories = Category::all();
            $cate_by_id = Category::find($id);
            $products = Product::where('category_id', $cate_by_id->id)->get();
        return view('admin.product.listbytype',["products" => $products,"categories" => $categories,"cate_by_id" => $cate_by_id]);
    }

    public function getChiTiet(Request $req,$id){
        $products = Product::where('id',$req->id)->first();
        $category = Category::where('id',$products->category_id)->first();
        return view('pages.ChiTietSanPham',compact('products','category'));
    }

}
