<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoLalulintas extends Model
{
    use HasFactory;

    protected $table = 'info_lalulintas';
    protected $fillable = ['keterangan', 'jam', 'tanggal','cctv_id'];
}
