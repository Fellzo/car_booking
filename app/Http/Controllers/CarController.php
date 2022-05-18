<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        return view('cars', ['cars' => Car::getAllAvailableForPeriod()]);
    }

    public function adminIndex() {
        return view('adminCars', ['cars' => Car::getAllAvailableForPeriod()]);
    }
}
