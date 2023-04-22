<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ListingController::class, 'index']);

Route::get('/listing/{listing}', [ListingController::class, 'show']);
/*creating routes to load views
Route::get('/hello', function() {
    return response("<h1>Laravel here we go!</h1>", 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/posts/{id}', function($id){
    //debugging -> die & dump | die dump & debug
    ddd($id); //500 status
    return response('Posts '.$id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    return($request->name.' '.$request->city);
});*/