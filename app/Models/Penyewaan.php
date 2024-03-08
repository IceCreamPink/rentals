<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penyewaan extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=['id_pelanggan', 'id_kendaraan', 'tgl_pinjam', 'tgl_kembali', 'total_biaya', 'tgl_pengembalian', 'kondisi_kendaraan', 'denda', 'status_pembayaran', 'id_user'];
}