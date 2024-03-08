<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('pelanggan.tampil', ['pelanggans'=>$pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan'=>'required',
            'alamat'=>'required', 
            'no_hp'=>'required', 
            'email'=>'required', 
            'nik'=>'required'
        ]);
        $data=[
            'nama_pelanggan'=>$request->nama_pelanggan,
            'alamat'=>$request->alamat, 
            'no_hp'=>$request->no_hp, 
            'email'=>$request->email, 
            'nik'=>$request->nik
        ];
        pelanggan::create($data);
        return redirect('pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(pelanggan $pelanggan)
    {
        pelanggan::where('id', $pelanggan->id)->delete();
        return redirect('pelanggan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pelanggan $pelanggan)
    {
        return view('pelanggan.edit',['pelanggan'=>$pelanggan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pelanggan $pelanggan)
    {
         $request->validate([
            'nama_pelanggan'=>'required',
            'alamat'=>'required', 
            'no_hp'=>'required', 
            'email'=>'required', 
            'nik'=>'required'
        ]);
        $data=[
            'nama_pelanggan'=>$request->nama_pelanggan,
            'alamat'=>$request->alamat, 
            'no_hp'=>$request->no_hp, 
            'email'=>$request->email, 
            'nik'=>$request->nik
        ];
        pelanggan::where('id', $pelanggan->id)->update($data);
        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pelanggan $pelanggan)
    {
        //
    }
}