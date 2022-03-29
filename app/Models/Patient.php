<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //Menjaga hanya field id 

    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
    public function history()
    {
        return $this->hasMany(History::class);
    }
}
