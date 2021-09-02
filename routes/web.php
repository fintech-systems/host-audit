<?php

use Illuminate\Support\Facades\Route;
use Mpociot\ChuckNorrisJokes\JokeFactory;
use FintechSystems\VirtualminApi\Facades\VirtualminApi;

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

Route::get('/', function () {
    // $jokes = new JokeFactory();

    dd(VirtualminApi::getDomains());
    
    return view('welcome', [
        // 'joke'=> $jokes->getRandomJoke()
        'domains'=> VirtualminApi::getDomains()
    ]);
});
