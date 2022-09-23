<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Polyclinic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    protected $dates = ['delete_at'];

    public function uploads()
    {
        return $this->morphOne(Upload::class, 'uploadable');
    }

    function doctors()
    {
        return $this->hasMany(Doctor::class, 'polyclinic_id', 'id');
    }
}
