<?php

//* phần quản trị
Route::middleware(["loginadmin",])->group(function (){
    //phần type
    Route::get('/admin/index','CategoryController@index')->name('show.index')->middleware('loginadmin');
    Route::get('/admin/category/list','CategoryController@showList')->name('show.list.type')->middleware('loginadmin');
    Route::get('/admin/category/add','CategoryController@showAddForm')->name('show.add.type');
    Route::post('/admin/category/add','CategoryController@add')->name('add.type');
    Route::get('/admin/category/edit/{id}','CategoryController@showEditForm')->name('show.edit.type');
    Route::post('/admin/category/edit/{id}','CategoryController@edit')->name('edit.type');
    Route::get('/admin/category/delete/{id}','CategoryController@showDeleteForm')->name('show.delete.type');
    Route::post('/admin/category/delete/{id}','CategoryController@delete');

// phần product
    Route::get('/admin/product/list','ProductController@showList')->name('show.list.product');
    Route::get('/admin/product/add','ProductController@showAddForm')->name('show.add.product');
    Route::post('/admin/product/add','ProductController@add');
    Route::get('/admin/product/edit/{id}','ProductController@showEditForm')->name('show.edit.product');
    Route::post('/admin/product/edit/{id}','ProductController@edit');
    Route::get('/admin/product/delete/{id}','ProductController@showDeleteForm')->name('show.delete.product');
    Route::post('/admin/product/delete/{id}','ProductController@delete');
    Route::get('/admin/product/list/{id}','ProductController@showListProductByType')->name('show.list.product.by.type');

// phần người dùng
    Route::get('/admin/user/list','UserController@showList')->name('show.list.user');
    Route::get('/admin/user/delete/{id}','UserController@showFormDelete')->name('show.delete');
    Route::post('/admin/user/delete/{id}','UserController@delete');

// phan custom
    Route::get('/admin/customer/list','CustomerController@showList')->name('show.list.customer');
    Route::get('/admin/customer/delete/{id}','CustomerController@showDelete')->name('show.delete.customer');
    Route::post('/admin/customer/delete/{id}','CustomerController@delete');

//phần bill
    Route::get('/admin/bill/list','BillController@showList')->name('show.list.bill');
    Route::get('/admin/bill/edit/{id}','BillController@showEditForm')->name('show.edit.bill');
    Route::post('/admin/bill/edit/{id}','BillController@edit');
    Route::get('/admin/bill/delete/{id}','BillController@showDelete')->name('show.delete.form');
    Route::post('/admin/bill/delete/{id}','BillController@delete');
    Route::get('/admin/bill/bill-by-customer/{id}','BillController@showListByCustomer')->name('show.list.by_customer');
    Route::get('/admin/bill/bill-detail/{id}','BillController@showBillDetail')->name('show.bill.detail');

//* phần quản trị
});
// phần login
Route::get('/admin/login','AdminController@showLoginForm')->name('show.login.form');
Route::post('/admin/login','AdminController@login')->name('login.admin');
Route::get('/admin/logout','AdminController@logout')->name('logout.admin');
Route::get('/admin/edit-password/{id}', 'AdminController@showFormEditPassword')->name('edit.password');
Route::post('/admin/edit-password/{id}', 'AdminController@editPassword');

//phan nguoi dung
Route::get('/',['as'=>'trang-chu', 'uses'=>'HomeController@getIndex']);
Route::get('chitiet_loaisp/{type}',['as'=>'chitiet_loaisp', 'uses'=>'CategoryController@showCategory']);
Route::get('chi-tiet-san-pham/{id}',['as'=>'chitietsanpham', 'uses'=>'ProductController@getChiTiet']);
Route::get('product', 'ProductControler@getList');


Auth::routes();
Route::get('/home', 'HomeController@getIndex')->name('home');

// dathang
Route::get('add-to-cart/{id}',['as'=>'themgiohang', 'uses'=>'HomeController@addtoCart']);
Route::get('dat-hang',['as'=>'dathang', 'uses'=>'HomeController@getCheckout']);
Route::post('dat-hang',['as'=>'dathang', 'uses'=>'HomeController@postCheckout']);
Route::get('del-cart/{id}',['as'=>'xoagiohang', 'uses'=>'HomeController@delItemCart']);

//login

Route::get('dang-nhap',['as'=>'login', 'uses'=>'HomeController@Login']);
Route::post('dang-nhap',['as'=>'login', 'uses'=>'HomeController@postLogin']);
Route::get('dang-ki',['as'=>'signin', 'uses'=>'HomeController@Signin']);
Route::post('dang-ki',['as'=>'signin', 'uses'=>'HomeController@postSignin']);
Route::get('dang-xuat',['as'=>'logout', 'uses'=>'HomeController@postLogout']);
Route::get('dang-xuat-admin',['as'=>'logout_admin', 'uses'=>'HomeController@postLogout_admin']);

Route::get('search',['as'=>'search', 'uses'=>'HomeController@getSearch']);

//mail tu dong
Route::get('search',['as'=>'search', 'uses'=>'HomeController@getSearch']);
Auth::routes();


