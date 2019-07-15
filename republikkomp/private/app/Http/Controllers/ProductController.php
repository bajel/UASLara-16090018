<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {	
        $produk = product::where('deleted', '=', 0)->get();
        return view('admin.product-table', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $produk = product::where('deleted', '=', 0)->get();

    	return view('admin.product-table', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload = $request->file('foto');
        $imgName = $upload->getClientOriginalName();
        $upload->move(base_path('images'), $imgName);

        product::create([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'kategori'=>$request->kategori,
            'foto'=>$imgName,
            'ket'=>$request->ket,


        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = product::find($id)->update(['deleted'=>1]);
        if($produk)
            return redirect()->back()->withSuccess('Sukses hapus data');
        return redirect()->back()->withError('Gagal hapus data');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = product::find($id);
       
        return view('admin.edit-produk', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $test = product::find($id);
        $imgName = $test->foto;
        if($request->has('foto')){   
        $upload = $request->file('foto');
        $imgName = $upload->getClientOriginalName();
        $upload->move(base_path('images'), $imgName);
    }
        product::where('id',$id)->update([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'kategori'=>$request->kategori,
            'foto'=>$imgName,
            'ket'=>$request->ket,


        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
