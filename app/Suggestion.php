<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    // menghubungkan dengan file request
    protected $fillable = [
        'id', 'email', 'content',
    ];
}
