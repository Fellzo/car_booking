<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'reg_number',
        'region',
        'price_by_day',
        'transmission',
        'doors_number',
        'power',
        'body_type',
        'year',
        'engine',
    ];

    public function station() {
        return $this->belongsTo(Station::class);
    }

    public static function getAllAvailableForPeriod(\DateTimeInterface $begin = null, \DateTimeInterface $end = null) {
        return static::all();
    }
}
