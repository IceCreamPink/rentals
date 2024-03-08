<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pelanggan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['nama_pelanggan', 'alamat', 'no_hp', 'email', 'nik'];
}