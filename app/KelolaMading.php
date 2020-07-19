<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


class KelolaMading extends Model
{
    use SoftDeletes;
    protected $fillable = ['id', 'gambar', 'caption','id_kategori','kategori'];
}
