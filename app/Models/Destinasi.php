<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $fillable = ['user_id', 'nama_destinasi', 'deskripsi', 'lokasi', 'status'];

    public function pengelola()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class, 'destinasi_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'destinasi_id', 'id');
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class, 'destinasi_id', 'id');
    }

    public function notifikasi()
    {
        return $this->morphMany(Notifikasi::class, 'terkait');
    }
}
