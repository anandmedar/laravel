<?php

// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
// Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/contact', 'App\Http\Controllers\TicketsController@create');
Route::post('/contact', 'App\Http\Controllers\TicketsController@store');
Route::get('/tickets', 'App\Http\Controllers\TicketsController@index');
Route::get('/ticket/{slug?}', 'App\Http\Controllers\TicketsController@show');
Route::get('/ticket/{slug?}/edit','App\Http\Controllers\TicketsController@edit');
Route::post('/ticket/{slug?}/edit','App\Http\Controllers\TicketsController@update');
Route::post('/ticket/{slug?}/delete','App\Http\Controllers\TicketsController@destroy');
Route::post('/comment', 'App\Http\Controllers\CommentsController@newComment');
Route::get('sendemail', function () {
    $data = array(
        'name' => "Emails Sending Test",
    );
    Mail::send('emails.welcome', $data, function ($message) {
        $message->from('anandgowda704@gmail.com', 'Sushmananda');
        $message->to('anandgowda704@gmail.com')->subject('Anand Medar test email');
    });
    return "Your email has been sent successfully";
});
