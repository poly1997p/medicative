<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontendController::class,'index']);
Route::get('/department-one',[FrontendController::class, 'departmentOne']);
Route::get('/department-two',[FrontendController::class, 'departmentTwo']);
Route::get('/department-three',[FrontendController::class, 'departmentThree']);
Route::get('/department-four',[FrontendController::class, 'departmentFour']);
Route::get('/department-five',[FrontendController::class, 'departmentFive']);
Route::get('/department-six',[FrontendController::class, 'departmentSix']);
Route::get('/doctors-team',[FrontendController::class, 'doctorsTeam']);
Route::get('/doctors-details',[FrontendController::class, 'doctorsDetails']);
Route::get('/shop-grid',[FrontendController::class, 'shopGrid']);
Route::get('/shop-list',[FrontendController::class, 'shopList']);
Route::get('/shop-single',[FrontendController::class, 'shopSingle']);
Route::get('/shop-cart',[FrontendController::class, 'shopCart']);
Route::get('/shop-checkout',[FrontendController::class, 'shopCheckout']);
Route::get('/testimonials',[FrontendController::class, 'testimonials']);
Route::get('/contact',[FrontendController::class, 'contact']);

