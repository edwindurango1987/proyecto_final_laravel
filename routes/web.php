<?php

use App\Http\Controllers\IndexController;
use App\Models\Product;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[IndexController::class,'Mancuernas'])->name('mancuernas');
Route::get('/barras',[IndexController::class,'Barras'])->name('barras');
Route::get('/discos',[IndexController::class,'Discos'])->name('discos');
Route::get('/bancos',[IndexController::class,'Bancos'])->name('bancos');

    

    /* $data=[
        'title'=>'Hello from Edwin Durango',
        'content'=>'This is a test email from Edwin Durango'
    ];

    Mail::send('emails.test',$data,function($message){
        $message->to('durangoandres177@gmail.com','Edwin Durango')->subject('Hello from Edwin Durango');
}); */


Route::resource(
    'products',
    App\Http\Controllers\ProductController::class
);

Route::resource(
    'categories',
    App\Http\Controllers\CategoryController::class
);

route::get('/products/{slug}',function(Product $product){
    return $product;
    })->name ('slug');

Route::resource('users',
App\Http\Controllers\UserController::class
);


Auth::routes();

Route::get('/home',function(){
    $data=[
        'title'=>'Hello from Edwin Durango',
        'content'=>'This is a test email from Edwin Durango'
    ];

    Mail::send('emails.test',$data,function($message){
        $message->to('durangoandres177@gmail.com','Edwin Durango')->subject('Hello from Edwin Durango');
});
return view('/home');
})->name('home')->middleware('EsAdmin');

/* Route::get('/', [App\Http\Controllers\AdminController::class,'index']); */
