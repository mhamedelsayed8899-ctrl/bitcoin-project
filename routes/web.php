<?php

use App\Http\Controllers\AdminAuthController ;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminAuth;
use App\Models\Message;
use Illuminate\Support\Facades\Route;




Route::get('/', [ShopController::class , 'index'])->name('shop.index') ;
Route::get('details/{id}', [ShopController::class , 'product_details'])->name('shop.details') ;
Route::any('products', [ShopController::class , 'products'])->name('shop.products') ;
Route::get('contact', [ShopController::class , 'contact'])->name('shop.contact') ;
Route::post('message/store', [ShopController::class , 'store_ms'])->name('shop.message.store') ;
Route::post('cart', [ShopController::class , 'add_to_cart'])->name('add.to.cart') ;


Route::get("login/form" , [AuthController::class , 'login_form'])->name('user.login.form') ;
Route::post("login/check" , [AuthController::class , 'login_check'])->name('user.login.check') ;
Route::get("user/logout" , [AuthController::class , 'logout'])->name('user.logout') ;




Route::prefix('dashboard')->group(function () {
    Route::get('login/form', [AdminAuthController::class, 'view_form'])->name('login.form');
    Route::post('login/check', [AdminAuthController::class, 'check'])->name('login.check');
});










Route::middleware(AdminAuth::class)->prefix('dashboard')->group(function(){

Route::get('/', function () {
    return view('dashborad.pages.index');
})->name('dashborad.index');

Route::resource("admin" , AdminController::class);

Route::resource("user" , UserController::class);

Route::resource("product" , ProductController::class);
Route::resource("categorie" , CatController::class);

Route::get('logout/admin' ,[AdminAuthController::class ,'logout'])->name('admin.logout') ;

// Route::get('login/form' ,[AdminAuthController::class ,'view_form'])->name('login.form') ;

// Route::post('login/check' ,[AdminAuthController::class ,'check'])->name('login.check') ;

Route::get('messages' , function(){

$data = Message::select("name" , "email")->distinct()->get() ;
    return view("dashborad.pages.messages.view" , compact('data')) ;


})->name("dashboard.messages") ;

Route::get('messages/{email}' , function($email){

$messages = Message::where("email" , $email)->orderBy('id' , 'desc')->get() ;

$data = Message::select("name" , "email")->distinct()->get() ;
    return view("dashborad.pages.messages.view" , compact('data' , "messages")) ;


})->name("dashboard.message.details") ;









}) ;



