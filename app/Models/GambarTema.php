<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarTema extends Model
{
    use HasFactory;

    protected $table = 'gambar_tema';

    protected $guarded = ['id'];
}
