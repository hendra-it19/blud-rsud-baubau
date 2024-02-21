<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktural extends Model
{
    use HasFactory;

    protected $table = 'strukturals';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
