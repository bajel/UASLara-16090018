<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\product;
use App\Kategori;

class pageController extends Controller
{
    public function index(){
        $produk = Produk::where('deleted', '=', 0)->get();
    	return view('pages.index', compact ('produk'));
    }

    public function product(Request $request){
        $produk = Produk::where('deleted', '=', 0)->get();
    	return view('pages.product', compact ('produk'));
    }

    public function store(Request $request){
        $produk = Produk::where('deleted', '=', 0)->get();        
    	return view('pages.store', compact ('produk'));
    }
   
    

    //     public function store(){
    // 	return view('pages.store');
    // }

    public function cate(Request $request){
        $data = Kategori::where('deleted', '=', 0)->get();              
    	return view('pages.category', compact ('data'));
    }
     public function about(){
    	return view('pages.about');
    }


    public function signup(){
    	return view('sign-up');
    }

    public function search(){
      //
    
    }




}
