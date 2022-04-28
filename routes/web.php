<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

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

//зАДАНИЕ НА 28.04

//1
Route::get('my-route/quest1', [TestController::class, 'quest1']);
//2
Route::get('my-route/quest2/{name}', [TestController::class, 'quest2']);
//3
Route::get('my-route/quest3/{name}&{item}', [TestController::class, 'quest3']);
//4
Route::get('my-route/quest4', [TestController::class, 'quest4']);
//5
Route::get('my-route/quest5/{a}&{b}', [TestController::class, 'quest5']);
//6
Route::get('my-route/quest6/{cipher}', [TestController::class, 'quest6']);

//Второй раздел

Route::get('template/{detach}', [TestController::class, 'lessonTemplateOne']);
//1
Route::get('conf', [TestController::class, 'quest21']);
//2
Route::get('conf/{name}', [TestController::class, 'quest22']);
//3
Route::get('book/{phrase}', [TestController::class, 'quest23']);
//4
Route::get('quest456', [TestController::class, 'quest456']);
//5


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

///

