<?php

namespace App\Http\Controllers;

use App\prooduk;
use Illuminate\Http\Request;

class ProodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = prooduk::where('deleted',0)->get();
        return view('pages.store',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prooduk  $prooduk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = prooduk::find($id);
        return view('pages.product',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prooduk  $prooduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        //    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prooduk  $prooduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prooduk $prooduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prooduk  $prooduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(prooduk $prooduk)
    {
        //
    }
}
