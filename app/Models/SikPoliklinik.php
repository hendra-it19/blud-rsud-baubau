<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SikPoliklinik extends Model
{
    use HasFactory;

    protected $connection = 'mysql_sik';

    protected $table = 'poliklinik';

    protected $fillable = [
        'kd_poli',
        'nm_poli',
        'registrasi',
        'registrasilama',
        'status',
    ];

    public function jadwal(): HasMany
    {
        return $this->hasMany(SikJadwalDokter::class, 'kd_poli', 'kd_poli');
    }

    public function bookingPeriksa(): HasMany
    {
        return $this->hasMany(SikBookingPeriksa::class, 'kd_poli', 'kd_poli');
    }
}
