<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::where('deleted', '=', 0)->get();        
    	return view('admin.kategori-admin', compact ('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form-cat');
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

        Kategori::create([
            'nama'=>$request->nama,
            'foto'=>$imgName
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hapus = Kategori::find($id)->update(['deleted'=>1]);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {
        $data = Kategori::find($id);
        return view('admin.edit-cat',compact('data'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $test = Kategori::find($id);
        $imgName = $test->foto;
        if($request->has('foto')){

        
        $upload = $request->file('foto');
        $imgName = $upload->getClientOriginalName();
        $upload->move(base_path('images'), $imgName);
        }
        Kategori::where('id',$id)->update([
            'nama'=>$request->nama,
            'foto'=>$imgName
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}
