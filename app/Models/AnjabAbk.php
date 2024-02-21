<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnjabAbk extends Model
{
    use HasFactory;

    protected $table = 'anjab_abks';

    // protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'nama_berkas',
        'file',
        'jenis_berkas'
    ];
}
