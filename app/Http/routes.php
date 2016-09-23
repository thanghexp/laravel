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

Route::group(['prefix' => 'Admin', 'namespace' => 'Admin'], function()
{
    Route::get('/articles', 'ArticlesController@index');
    Route::get('/articles/create', 'ArticlesController@create');
    Route::post('/articles/create', 'ArticlesController@store');
    Route::post('/articles/delete', 'ArticlesController@delete');
    Route::get('Admin/notes', 'NotesController@index');
});

// Route Notes 
Route::get('Admin/notes', 'Admin/NotesController@index');
Route::get('Admin/notes/create', 'Admin/NotesController@create');
Route::get('Admin/notes/update', 'Admin/NotesController@update');
Route::get('Admin/notes/show', 'Admin/NotesController@show');
Route::get('Admin/notes/store', 'Admin/NotesController@store');


// Route Home
Route::get('Admin/home', 'Admin/HomeController@index');

//Route::resource('articles', 'ArticlesController');
Route::resource('Admin/customers', 'Admin/CustomersController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('Admin/users', 'Admin/UsersController@index');

Route::get('demo', function(){
    return view('layout.Admin.dashboard');
});