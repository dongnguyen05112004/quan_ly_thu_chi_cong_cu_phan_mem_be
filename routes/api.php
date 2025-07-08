<?php

use App\Http\Controllers\tietKiemCOntroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/khach-hang/don-hang/data-chi-tiet', [tietKiemCOntroller::class, 'gettietkiem']);


