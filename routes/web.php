<?php

use App\Http\Controllers\mailController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\User\OrderController as userOrderController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});
//Route::view('/about','about');
Route::view('/testimonial','testimonials');
Route::view('/contact','contact');
Route::view('/advisory','advisory-board');
Route::view('/gallery','gallery');
Route::view('/services','services');
Route::view('/service','service');

Route::post('/form/action',[mailController::Class,'mail']);




//Route::get('/dashboard', function () {
//    return view('user.index');
//})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function (){

    Route::post('/create-order',  [userOrderController::class, 'create_order']);

    Route::post('/add-edit-order-address', [userOrderController::class, 'edit_order_address']);

    Route::get('/user-order-list', [userOrderController::class, 'view_order']);

    Route::get('reorder/{order_id}/{user_id}', [userOrderController::class, 'reorder']);

    Route::post('/reorder', [userOrderController::class, 'reorder_post']);

    Route::get('/edit-address/{table}/{id}', [HomeController::class, 'edit_address']);

    Route::get('/user-profile', [HomeController::class, 'profile']);

    Route::post('/profile_update', [HomeController::class, 'update_profile']);

    Route::post('/edit_other_address', [HomeController::class, 'edit_other_address']);
    Route::get('/support', [HomeController::class, 'support']);
    Route::post('/support', [HomeController::class, 'support_post']);
});
require __DIR__.'/auth.php';












Route::post('test.login', function (){
    echo "ok";
})->name('test.login');





// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        // login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard','HomeController@index')->name('dashboard');

        Route::get('admin-test','HomeController@adminTest')->name('admintest');
        Route::get('editor-test','HomeController@editorTest')->name('editortest');

        Route::get('view-orders', [OrderController::class, 'view_orders']);
        Route::get('view-orders/{action}', [OrderController::class, 'view_orders']);

        Route::get('orders/{action}/{id}', [OrderController::class, 'order_set']);

//        Route::get('placed-orders', [OrderController::class, 'admin_track_order_view']);
        Route::post('track-order/{id}', [OrderController::class , 'track_order']);
//        Route::get('filter_orders', [OrderController::class, 'filter']);
        Route::get('view-user','HomeController@view_user');

    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});



Route::get('/admin1', function (){
    return view('admin.index');
});






