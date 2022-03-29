<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //menjaga field id

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function history()
    {
        return $this->hasMany(History::class);
    }
}
