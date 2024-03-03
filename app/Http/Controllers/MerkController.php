<?php

namespace App\Http\Controllers;

use App\Models\merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merk = Merk::all();
        return view('merk.tampil', ['merks'=>$merk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merk.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(['merk'=>'required']);
        $data =[
            'merk' =>$request-> merk
        ];
        merk::create($data);
        return redirect('merk');
    }

    /**
     * Display the specified resource.
     */
    public function show(merk $merk)
    {
       merk::where('id', $merk->id)->delete();
       return redirect('merk');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(merk $merk)
    {
        return view('merk.edit', ['merk'=>$merk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, merk $merk)
    {
        $request->validate(['merk'=>'required']);
        $data = [
            'merk'=>$request->merk
        ];
        Merk::where('id',$merk->id)->update($data);
        return redirect('merk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(merk $merk)
    {
        //
    }
}