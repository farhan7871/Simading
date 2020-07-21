<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelolaMading extends Model
{
    use SoftDeletes;

    // menghubungkan dengan file request
    protected $fillable = [
        'gambar', 'deskripsi', 'kelola_kategori_id'
    ];

    protected $hidden = [];

    public function kelola_kategori()
    {
        return $this->belongsTo(KelolaKategori::class, 'kelola_kategori_id', 'id');
    }
}
