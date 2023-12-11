<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/", function(){
    $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 19.99],
        ['id' => 2, 'name' => 'Product 2', 'price' => 29.99],
        ['id' => 3, 'name' => 'Product 3', 'price' => 39.99],
    ];
    return view("home",["products"=>$products]);
})->name('home');

Route::view("/services", "services")->name('services');

Route::get("/products", function(){
    $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 19.99],
        ['id' => 2, 'name' => 'Product 2','price' => 29.99],
        ['id' => 3, 'name' => 'Product 3', 'price' => 29.99],
        // Add more products as needed
    ];
return view("products", ['products'=>$products]);
})->name('products');

Route::view("/contact", "contact")->name('contact');

Route::view("/about", "about")->name('about');

Route::view("/login", "login")->name('login');

Route::view("/register", "register")->name('register');

// Route::get("/get-data",[UsersController::class, "getData"]);

Route::get("/dashboard",[UsersController::class, "getUsers"]);

Route::post("/handle-login",[UsersController::class, "handleLogin"]);

Route::post("/handle-register",[UsersController::class, "handleRegister"]);


