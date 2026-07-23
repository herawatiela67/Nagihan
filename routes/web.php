<?php
use Http\App\Http\Controllers\CustomerController;
use Http\App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/customer', [CustomerController, 'index']);
