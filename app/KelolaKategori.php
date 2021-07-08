<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelolaKategori extends Model
{
    use SoftDeletes;
    
    // protected $table = 'kelola_kategori';
    // menghubungkan dengan file request
    protected $fillable = [
        'id', 'kategori'
    ];

    protected $hidden = [];


    public function kelola_mading()
    {
        return $this->hasMany(KelolaMading::class);
    }
}
