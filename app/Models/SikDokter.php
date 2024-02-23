<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SikDokter extends Model
{
    use HasFactory;

    protected $connection = 'mysql_sik';

    protected $table = 'dokter';

    // protected $with = ['spesialis'];

    protected $fillable = [
        'kd_dokter',
        'nm_dokter',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'gol_drh',
        'agama',
        'almt_tgl',
        'no_telp',
        'stts_nikah',
        'kd_sps',
        'alumni',
        'no_ijn_praktek',
        'status',
        'foto',
    ];

    public function jadwal(): HasMany
    {
        return $this->hasMany(SikJadwalDokter::class, 'kd_dokter', 'kd_dokter');
    }

    public function spesialis(): BelongsTo
    {
        return $this->belongsTo(SikSpesialis::class, 'kd_sps', 'kd_sps');
    }
}
