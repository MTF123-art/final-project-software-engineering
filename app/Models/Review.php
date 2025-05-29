<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id', 'destinasi_id', 'rating', 'komentar'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class, 'destinasi_id', 'id');
    }

    // Relasi komentar, jika komentar disimpan di tabel lain
    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class, 'review_id', 'id');
    }
}
