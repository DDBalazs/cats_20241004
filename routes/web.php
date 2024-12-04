<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsContrller;

Route::get('/', [CatsContrller::class, 'AllCats']);
