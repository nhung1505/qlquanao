<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function showList(){
        $categories = Category::all();
        return view('admin.category.list',["categories" => $categories]);
    }
    public function showCategory($id){
        $products = Product::where('category_id',$id)->get();
        $cate = Category::where('id',$id)->first();
        $categories = Category::with("products")->get();
        return view('pages.ChiTietLoaiSanPham',compact('products','cate','categories'));
    }

    public function showAddForm(){
        return view('admin.category.add');
    }

    public function add(Request $request){
        $category = new Category();
        $category->name = $request->input("typeproduct");
        $category->save();
        return redirect(route("show.list.type"));
    }

    public function showEditForm(Request $request,$id){
        $category = Category::find($id);
        return view('admin.category.edit',["category" => $category]);
    }

    public function edit(Request $request,$id){
        $category = Category::find($id);
        $category->name = $request->input('typeproduct');
        $category->save();
        return redirect(route("show.list.type"));
    }

    public function showDeleteForm(Request $request,$id){
        $category = Category::find($id);
        return view("admin.category.delete",["category" => $category]);
    }

    public function delete(Request $request,$id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route("show.list.type"));
    }

}
