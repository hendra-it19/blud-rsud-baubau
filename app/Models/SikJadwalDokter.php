<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SikJadwalDokter extends Model
{
    use HasFactory;

    protected $connection = 'mysql_sik';

    protected $table = 'jadwal';

    protected $fillable = [
        'kd_dokter',
        'hari_kerja',
        'jam_mulai',
        'jam_selesai',
        'kd_poli',
        'kuota'
    ];

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(SikDokter::class, 'kd_dokter', 'kd_dokter');
    }
}
