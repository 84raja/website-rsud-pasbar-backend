<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'polyclinic_id',
        'name',
        'no_hp',
        'group',
        'email'
    ];



    public function uploads()
    {
        return $this->morphOne(Upload::class, 'uploadable');
    }

    function polyclinic()
    {
        return $this->belongsTo(Polyclinic::class, 'polyclinic_id', 'id');
    }
}
