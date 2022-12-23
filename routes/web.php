<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/books', function(){
        $users = App\Models\User::all();
        echo $users;
        $book = [
            ['title' => 'mad men',
            'author'=> 'mosh',
            'publisher' => 'randum hous',
            'year' => 1956],
            ['title' => 'mad men',
            'author'=> 'mosh',
            'publisher' => 'randum hous',
            'year' => 1956],
            ['title' => 'mad men',
            'author'=> 'mosh',
            'publisher' => 'randum hous',
            'year' => 1956]
        ];
        return view('books', ['book' => $book]);
    }
    
);