<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userAPIAuth;

Route::post('login',[userAPIAuth::class,'login']);
