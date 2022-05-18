<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'phone', 'lon', 'lat'
    ];

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
