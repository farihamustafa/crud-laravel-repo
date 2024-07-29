<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/post',function(Request $request){
    $name = $request->name;
    // dd($name);
    return view('submitted',compact(['name']));
})->name('submitform');

Route::get('type/{value}',function($value){
    return $value;
});

// Route::get('/{value}',function($value){
//     return $value;
// });

// Route::resource('product', ProductController::class);
Route::resource('vendor', VendorController::class);