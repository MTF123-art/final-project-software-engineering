<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['destinasi_id', 'url_gambar'];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class, 'destinasi_id', 'id');
    }
}
