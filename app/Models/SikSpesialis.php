<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SikSpesialis extends Model
{
    use HasFactory;

    protected $connection = 'mysql_sik';

    protected $table = 'spesialis';

    protected $fillable = [
        'kd_sps',
        'nm_sps'
    ];

    public function dokter(): HasMany
    {
        return $this->hasMany(SikDokter::class, 'kd_sps', 'kd_sps');
    }
}
