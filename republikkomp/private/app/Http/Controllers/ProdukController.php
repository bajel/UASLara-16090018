<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Storage;

class ProdukController extends Controller
{
    public function index(){
     //
    }
    // public function show($id){
    //     $produk = Produk::findOrFail($id);
    //     return view('pages.product');
    // }
    // public function product(){
    //     $produk = Produk::where('deleted', '=', 0);

    // 	return view('pages.product', compact('produk'));
    // }

    public function store(Request $request){
        
    }


    
}
