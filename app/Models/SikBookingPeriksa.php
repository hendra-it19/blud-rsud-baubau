<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class SikBookingPeriksa extends Model
{
    use HasFactory;

    protected $connection = 'mysql_sik';

    protected $table = 'booking_periksa';
    public $timestamps = false;
    protected $primaryKey = 'no_booking';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'no_booking',
        'tanggal',
        'nama',
        'alamat',
        'no_telp',
        'email',
        'kd_poli',
        'tambahan_pesan',
        'status',
        'tanggal_booking',
    ];

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->no_booking = IdGenerator::generate([
    //             'table' => $model,
    //             'field' => 'no_booking',
    //             'length' => 14,
    //             'prefix' => 'BP' . date('Ymd'),
    //         ]);
    //     });
    // }

    public function poliklinik(): BelongsTo
    {
        return $this->belongsTo(SikPoliklinik::class, 'kd_poli', 'kd_poli');
    }
}
