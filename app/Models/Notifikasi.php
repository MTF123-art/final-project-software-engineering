<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $fillable = [
        'user_id',
        'pesan',
        'tipe',
        'terkait_id',
        'terkait_tipe',
        'dibaca'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function terkait()
    {
        return $this->morphTo('terkait', 'terkait_tipe', 'terkait_id');
    }
}
