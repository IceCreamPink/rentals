<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kendaraan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillablefillable =[
        'nama_kendaraan', 'id_type', 'id_merk', 'plat_no', 'tahun_produksi', 'status', 'tarif'
    ];
}