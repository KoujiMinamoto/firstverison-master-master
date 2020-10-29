<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers;
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
    return view('home');
});

Route::get('/userLogin', function () {
    return view('dashboard_user');
});
Route::get( '/home', function () {
    return view('home');
});
Route::get( '/design', function () {
    return view('home');
});
Route::get( '/gallary', function () {
    return view('home');
});
Route::get( '/support', function () {
    return view('home');
});
Route::get( '/aboutUs', function () {
    return view('home');
});
Route::get( '/contact', function () {
    return view('home');
});
Route::get( '/cart', function () {
    return view('home');
});
Route::get( '/login', function () {
    return view('home');
});
Route::get( '/register', function () {
    return view('home');
});
Route::get( '/product/booklets', function () {
    return view('home');
});
Route::get( '/product/brochures', function () {
    return view('home');
});
Route::get( '/product/businessCards', function () {
    return view('home');
});
Route::get( '/product/deskpadsNotepads', function () {
    return view('home');
});
Route::get( '/product/directMarketing', function () {
    return view('home');
});
Route::get( '/product/docketBooks', function () {
    return view('home');
});
Route::get( '/product/envelopes', function () {
    return view('home');
});
Route::get( '/product/expressPrinting', function () {
    return view('home');
});
Route::get( '/product/flyers', function () {
    return view('home');
});
Route::get( '/product/fridgeMagnets', function () {
    return view('home');
});
Route::get( '/product/letterheads', function () {
    return view('home');
});
Route::get( '/product/postcards', function () {
    return view('home');
});
Route::get( '/product/posters', function () {
    return view('home');
});
Route::get( '/product/presentationFolders', function () {
    return view('home');
});
Route::get( '/product/directMarketing', function () {
    return view('home');
});
Route::get( '/product/withCompliments', function () {
    return view('home');
});
Route::get( '/product/websiteDesign', function () {
    return view('home');
});
// Route::get('/test1', function () {
//     return view('dashboard_user');
// });


$api = app(\Dingo\Api\Routing\Router::class);

$api->version('v1',['namespace' => 'App\Http\Controllers'],function ($api) {

    $api->post('userLogin', 'UserController@userLogin');
    $api->post('userRegister','UserController@userRegister');
    $api->post('userUpdateMessage','UserController@userUpdateMessage');


    $api->post('card','OrderController@addOrder');

    $api->post('sendEmail','UserController@sendEmail');

    $api->get('getNumOfOrders','DashboardController@getNumOfOrders');
    $api->get('getNumOfClients','DashboardController@getNumOfClients');
    $api->get('getAmount','DashboardController@getAmount');
    $api->get('getOrderAndAmountByMonth/{startDate}/{endDate}','DashboardController@getOrderAndAmountByMonth');
    $api->get('getAllOrder/{startDate}/{endDate}','DashboardController@getAllOrder');
    $api->get('getAllUser','DashboardController@getAllUser');
    $api->get('getAllOrderByUser/{user}','DashboardController@getAllOrderByUser');
    $api->get('getOrderAndAmountByMonthUser/{startDate}/{endDate}/{user}','DashboardController@getOrderAndAmountByMonthUser');
    $api->get('getNumOfOrdersByUser/{user}','DashboardController@getNumOfOrdersByUser');
    $api->get('getAmountByUser/{user}','DashboardController@getAmountByUser');
    $api->get('getProfile/{user}','DashboardController@getProfile');


});
