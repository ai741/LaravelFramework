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


//Практика с учебника

//1
Route::get('/my-name', function () {
    return "Петров Александр Андреевич";
});

//2

Route::get('/my-friend', function () {
    return "Мой друг Джимбо";
});

//3

Route::get('/get-friend/{name}', function ($name) {
    return 'Мой друг не Джимбо, а - '.$name ;
});

//4
Route::get('/my-city/{city}', function ($city) {

    $cites = [
        ['cityLat' => "moscow", 'cityName' =>  'Москва'],
        ['cityLat' => "chelyabinsk", 'cityName' =>  'Челябинск'],
        ['cityLat' => "sochi", 'cityName' =>  'Сочи'],
        ['cityLat' => "adler", 'cityName' =>  'Адлер'],
    ];

    foreach ($cites as $item){
        if($city === $item['cityLat']){
            return "Ваш город - " . $item['cityName'];
        }
    }
});

//5
Route::get('/level/{lvl}', function ($lvl) {
    if($lvl <= 25 ?? $lvl > 0){
        return "Вы новичок в этом зале";
    } elseif ($lvl > 26 && $lvl <= 50){
        return "Вы неплохой специалист в зале";
    } elseif ($lvl > 51 && $lvl <= 75){
        return "Вы босс в зале, вас уважают";
    } elseif ($lvl > 76 && $lvl <= 98){
        return "Вы старик с мышцами";
    }  elseif ($lvl <= 99){
        return "Король только один и это вы!!!";
    }
});

//6
Route::get('/working/{name}/{date}', function ($name, $date) {
    return "Имя проекта - " . $name . ", время его исполнения: " . $date;
});

//7
Route::get('/power/{name}', function ($name) {
    return \route('power', ['name' => $name]);
})->name('power');

//8
Route::prefix('/admin')->group(function (){
    Route::get('/login', function(){
        return \route('login');
    })->name('login');
    Route::get('/logout', function(){
        return \route('logout');
    })->name('logout');

    Route::get('/info', function(){
        return \route('info');
    })->name('info');

    Route::get('/color', function(){
        return \route('color');
    })->name('color');
});

//9
Route::redirect('/admin/web', '/admin/color');

//10
Route::get('/color/{hex}', function ($hex){
    return "Цвет есть {$hex}";
})->where(['hex' => '[0-9A-F]{6}']);

//

