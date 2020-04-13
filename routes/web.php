<?php

/*
| --------------------------------------------------------------------------
| Web Routes
| --------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/i', function () {
    return view('index');
});


Route::get('/login', 'AdminController@login');

Route::post('/logsubmit', 'AdminController@login1');



Route::group(['middleware' => 'checkuser'],function () {
    Route::get('/', 'PaymentController@getdata');

    Route::get('/cp', 'AdminController@getdata');

    Route::post('/submitpass', 'AdminController@submitdata');

    Route::get('/logout', 'AdminController@logout');


    Route::get('/product', 'ProductController@getdata');

    Route::post('/submitproduct', 'ProductController@submitdata');

    Route::get('/deleteproduct/{id}', 'ProductController@deleteinfo');

    Route::get('/group', 'GroupController@getinfo');

    Route::post('/submitgroupname', 'GroupController@submitname');

    Route::get('/delete/{id}', 'GroupController@deleteinfo');

    Route::get('/dsr', 'DsrController@getdata');

    Route::post('/submitdsr', 'DsrController@submitdata');

    Route::get('/deletedsr/{id}', 'DsrController@deleteinfo');

    Route::get('/dailyWork', 'DworkController@getdata');

    Route::post('/submitdaily', 'DworkController@submitdata');

    Route::get('/workhistory', 'DworkController@workhistory');

    Route::get('/getdata', 'DworkController@get');

    Route::post('/submitdsrproduct', 'WorkdetailsController@dsrwork');

    Route::get('/deletedproduct/{id}', 'WorkdetailsController@deleteinfo');

    Route::get('/return', 'WorkdetailsController@returnlist');

    Route::get('/returnlist/{id}', 'WorkdetailsController@returnlist1');

    Route::post('/addreturn', 'WorkdetailsController@listadd');

    Route::post('/submitpayment', 'WorkdetailsController@pay');

    Route::get('/deletepay/{id}', 'WorkdetailsController@paydel');

    Route::get('/deletein/{id}', 'WorkdetailsController@indel');

    Route::get('/sheet/{id}', 'InexController@show');

    Route::get('/all', 'InexController@returnlist');

});





