<?php

namespace App\Http\Controllers;

use App\beranda;
use App\Produk;
use App\Kategori;
use App\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
        $produk = Produk::where('deleted', '=', 0)->get();        
        return view('admin.index', compact ('produk'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = Kategori::where('deleted', '=', 0)->get();        
    	return view('admin.index', compact ('kategori')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function show(beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function edit(beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function destroy(beranda $beranda)
    {
        //
    }
}
