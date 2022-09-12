<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sejarah',
        'visi',
        'misi',
        'telp',
        'no_hp',
        'email',
        'foto_profil',
        'logo',
        'struktur_organisasi'
    ];

    protected $hidden = [
        'id'
    ];

    public function scopeProfileActive()
    {
        return $this->where('id', 1)->first();
    }

    public function uploads()
    {
        return $this->morphMany(Upload::class, 'uploadable');
    }
}
