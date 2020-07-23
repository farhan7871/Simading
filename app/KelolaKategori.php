<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelolaKategori extends Model
{
    use SoftDeletes;

    // menghubungkan dengan file request
    protected $fillable = [
        'kategori'
    ];

    protected $hidden = [];


    public function kelola_mading()
    {
        return $this->hasMany(KelolaMading::class, 'kelola_kategori_id', 'id');
    }
}
