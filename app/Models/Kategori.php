<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama_kategori',
        'slug',
    ];

    public function destinasi()
    {
        return $this->hasMany(Destinasi::class, 'kategori_id', 'id');
    }
}
