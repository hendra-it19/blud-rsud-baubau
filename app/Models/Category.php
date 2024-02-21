<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function postingan_beritas(): HasMany
    {
        return $this->hasMany(PostinganBerita::class, 'category_id', 'id');
    }
}
