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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/url', function (){
    return 'Route URL: ' . route('main',['page' =>25]);
});
// 1 задание
Route::get('/my-name', function (){
    return "Мое ФИО: {$_GET['FIO']}";
});
// 2 задание
Route::get('/my-friend', function (){
    return "ФИО моего друга: {$_GET['FIO_friend']}";
});
// 3 задание
Route::get('/get-friend/{name}', function ($name){
    return "Логин друга: {$name}";
});
// 4 задание
Route::get('/my-city/{city}', function ($city){
    return "Мой город: {$city}";
})->where(['city'=>'[A-Za-z]+']);
// 5 задание
Route::get('/level/{lvl}', function ($lvl){
    if($lvl<0||$lvl>99){
        return "Такого лвл не бывает";
    }
    elseif($lvl<=25){
        return "Вы новичок";
    }
    elseif($lvl>25&&$lvl<=50){
        return "Вы специалист";
    }
    elseif($lvl>50&&$lvl<=75){
        return "Вы босс";
    }
    elseif($lvl>75&&$lvl<=98){
        return "Вы старик";
    }
    elseif($lvl==99){
        return "Вы король";
    }
    else{
        return "Вы что-то пишите не так!";
    }
});

// 6 задание
Route::get('/working/{name}/{date}', function ($name,$date){
    return "Название проекта: {$name}<br> Дата исполнения: {$date}";
});

// 7 задание
Route::get('/power', function (){
    return \route('power');
})->name('power');

//8 задание
    Route::prefix('admin')->group(function (){
        Route::get('/login', function (){
            return \route('login');
        })->name('login');

        Route::get('/logout', function (){
            return \route('logout');
        })->name('logout');

        Route::get('/info', function (){
            return \route('info');
        })->name('info');

        Route::get('/color', function (){
            return \route('color');
        })->name('color');
    });

// 9 задание
Route::get('admin/web', function () {
    return redirect('admin/color');
});

//10 задание
Route::get('/color/{hex}', function ($hex){
    return "Цвет: #{$hex}";
})->where(['hex'=>'[0-9A-F]{6}']);

//praktika na 28.04.22
// 1 часть задания 1-6
Route::get('zadanie1', [TestController::class, 'zadanie1']);
Route::get('zadanie2', [TestController::class, 'zadanie2']);
Route::get('zadanie3', [TestController::class, 'zadanie3']);
Route::get('zadanie4', [TestController::class, 'zadanie4']);
Route::get('zadanie5', [TestController::class, 'zadanie5']);
Route::get('zadanie6', [TestController::class, 'zadanie6']);

// 2 часть задания 1-6
Route::get('template', [TestController::class, 'lessonTemplateOne']);
Route::get('template2/{organization}', [TestController::class, 'lessonTemplateTwo']);
Route::get('template3/{srtname}', [TestController::class, 'lessonTemplateThree']);
Route::get('template4', [TestController::class, 'lessonTemplateFour']);
Route::get('template5', [TestController::class, 'lessonTemplateFive']);
Route::get('template6', [TestController::class, 'lessonTemplateSix']);
