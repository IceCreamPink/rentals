<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use App\Models\pelanggan;
use App\Models\Penyewaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sewa=Penyewaan::join('kendaraans', 'penyewaans.id_kendaraan', '=', 'kendaraans.id')->join('pelanggans', 'penyewaans.id_pelanggan', '=', 'pelanggans.id')->join('users', 'penyewaans.id_user', '=', 'users.id')->select('penyewaans.*','kendaraans.nama_kendaraan','pelanggans.nama_pelanggan','users.nama_lengkap')->get();
        return view('penyewaan.tampil', ['Penyewaans'=>$sewa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = pelanggan::all();
        $kendaraan = kendaraan::where('status', 'tersedia')->get();
        return view('penyewaan.add', ['pelanggans'=>$pelanggan, 'kendaraans'=>$kendaraan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan'=>'required',
            'id_kendaraan'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required'
        ]);
        $data=[
            'id_pelanggan'=>$request->id_pelanggan,
            'id_kendaraan'=>$request->id_kendaraan,
            'tgl_pinjam'=>$request->tgl_pinjam,
            'tgl_kembali'=>$request->kembali,
            'id_user'=>Auth::user()->id
        ];
        Penyewaan::create($data);
        return redirect('penyewaan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penyewaan $penyewaan)
    {
        Penyewaan::where('id', $penyewaan->id)->delete();
        return redirect('penyewaan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyewaan $penyewaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penyewaan $penyewaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyewaan $penyewaan)
    {
        //
    }
}