<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelolaMading extends Model
{
    use SoftDeletes;

    // menghubungkan dengan file request
    protected $fillable = [
        'kelola_kategori_id', 'deskripsi', 'gambar', 'users_id'
    ];

    protected $hidden = [];

    public function kelola_kategori()
    {
        return $this->belongsTo(KelolaKategori::class);
        
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

