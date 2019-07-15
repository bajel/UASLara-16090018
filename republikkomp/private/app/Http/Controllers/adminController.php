<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class adminController extends Controller
{
  public function dashboard(){
      $produk = Produk::where('deleted', '=', 0)->get();
      return view('admin.index', compact('produk'));
      
    }
    public function product(){
      $produk = Produk::where('deleted', '=', 0)->get();
    	return view('admin.product', compact('produk'));
    }
      public function product_table(){
        $produk = Produk::where('deleted', '=', 0)->get();

    	return view('admin.product-table', compact('produk'));
    }
    

}
