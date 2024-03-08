<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use App\Models\merk;
use App\Models\Type;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = kendaraan::join('types', 'kendaraans.id_type','=', 'types.id' )->join('merks', 'kendaraans.id_merk', '=', 'merks.id')->select('kendaraans.*','types.type','merks.merk')->get();
        return view('kendaraan.tampil', ['kendaraans'=>$kendaraan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type=Type::all();
        $merk=merk::all();
        return view('kendaraan.add', ['types'=>$type, 'merks'=>$merk]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 'nama_kendaraan', 'id_type', 'id_merk', 'plat_no', 'tahun_produksi', 'status', 'tarif'
        $request->validate([
           'nama_kendaraan'=>'required',
           'type'=>'required',
           'merk'=>'required', 
           'plat_no'=>'required', 
           'tahun_produksi'=>'required', 
           'status'=>'required', 
           'tarif'=>'required'
        ]);
        $data=[
            'nama_kendaraan'=>$request->nama_kendaraan,
            'id_type'=>$request->type,
            'id_merk'=>$request->merk, 
            'plat_no'=>$request->plat_no, 
            'tahun_produksi'=>$request->tahun_produksi, 
            'status'=>$request->status, 
            'tarif'=>$request->tarif
        ];
        kendaraan::create($data);
        return redirect('kendaraan');
    }

    /**
     * Display the specified resource.
     */
    public function show(kendaraan $kendaraan)
    {
        kendaraan::where('id', $kendaraan->id)->delete();
        return redirect('kendaraan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kendaraan $kendaraan)
    {
        $type = Type::all();
        $merk = merk::all();
        return view('kendaraan.edit', ['kendaraan'=>$kendaraan, 'merks'=>$merk, 'types'=>$type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kendaraan $kendaraan)
    {
           $request->validate([
           'nama_kendaraan'=>'required',
           'type'=>'required',
           'merk'=>'required', 
           'plat_no'=>'required', 
           'tahun_produksi'=>'required', 
           'status'=>'required', 
           'tarif'=>'required'
        ]);
        $data=[
            'nama_kendaraan'=>$request->nama_kendaraan,
            'id_type'=>$request->type,
            'id_merk'=>$request->merk, 
            'plat_no'=>$request->plat_no, 
            'tahun_produksi'=>$request->tahun_produksi, 
            'status'=>$request->status, 
            'tarif'=>$request->tarif
        ];
        kendaraan::where('id', $kendaraan->id)->update($data);
        return redirect('kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kendaraan $kendaraan)
    {
        //
    }
}