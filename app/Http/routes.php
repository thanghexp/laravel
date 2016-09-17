<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('ThemSanPham', function(){
    $sanpham = new App\SanPham();
    $sanpham->TenSP = "San Pham";
    $sanpham->HinhSP = "abcabc";
    $sanpham->Gia = 1000;
    $sanpham->save();
    echo 'Da them san pham';
});

//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::post('articles/create', 'ArticlesController@store');

Route::resource('articles', 'ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);