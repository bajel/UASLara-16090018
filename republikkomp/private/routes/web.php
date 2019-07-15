<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/form', function () {
    return view('admin.form');
});
//Pages Front
Route::get('/home', 'pageController@index');
Route::get('/product', 'pageController@product');
Route::get('/store', 'pageController@store');
Route::get('/categories', 'pageController@cate');
Route::get('/about', 'pageController@about');
Route::get('/login', 'pageController@login');

Route::get('/sign-up', 'pageController@signup');
Route::resource('prooduk','proodukController');


//Admin
Route::get('/dashboard', 'adminController@dashboard');
Route::get('/list-product', 'adminController@product');
Route::resource('/product-del', 'ProductController');
Route::resource('/cat-del', 'KategoriController');
Route::resource('/table-product', 'ProductController');
Route::post('/form', 'ProductController@store');
Route::resource('/table-categorie', 'KategoriController');
// Route::get('/store{id}/detail', 'ProdukController@show')->name('detail');
Auth::routes();
//Search
Route::post('cari', 'PageController@search');
Route::any('/search',function(){ $p = Input::get('search');
    $data = Produk::where('nama','LIKE','%'.$p.'%')->orWhere('kategori','like','%'.$p.'%')->where('deleted','=',0);
         
    return view('pages.search', compact('data'))->with('p',$p);
});

Route::get('/beranda', 'HomeController@index')->name('home');
