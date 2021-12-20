<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCCTV extends Model
{
    use HasFactory;

    protected $table = 'data_cctv';
    protected $fillable = ['nama_cctv', 'lokasi', 'link'];
}
