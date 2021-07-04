<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bengkel extends Model
{
    use HasFactory;
    protected $table = "bengkel";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'judul',
        'jenis',
    ];
    public $timestamps = false;
}
