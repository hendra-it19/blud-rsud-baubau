<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarSlider extends Model
{
    use HasFactory;

    protected $table = 'gambar_sliders';

    protected $guarded = ['id'];
}
