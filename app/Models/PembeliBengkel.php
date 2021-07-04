<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembeliBengkel extends Model
{
    use HasFactory;

    protected $table = "pembelian";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_barang',
        'tanggal',
        'total',
    ];
    public $timestamps = false;
}
