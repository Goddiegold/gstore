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
        ['id' => 1, 'name' => 'Smart Watch', 
        'price' => 19.99 ],
        ['id' => 2, 'name' => 'Iphone 15 Pro Max','price' => 29.99],
        ['id' => 1, 'name' => 'Gaming Monitor', 
        'price' => 3000 ],
        ['id' => 2, 'name' => 'Macbook Air','price' => 54.66],
        ['id' => 3, 'name' => 'Dell G3 Odyssey', 'price' => 29.99],
        ['id' => 3, 'name' => 'Mouse', 'price' => 29.99],  
    ];
    return view("home",["products"=>$products]);
})->name('home');

Route::view("/services", "services")->name('services');

Route::get("/products", function(){
    $products = [
        ['id' => 1, 'name' => 'Smart Watch', 
        'price' => 19.99 ],
        ['id' => 2, 'name' => 'Iphone 15 Pro Max','price' => 29.99],
        ['id' => 1, 'name' => 'Gaming Monitor', 
        'price' => 3000 ],
        ['id' => 2, 'name' => 'Macbook Air','price' => 54.66],
        ['id' => 3, 'name' => 'Dell G3 Odyssey', 'price' => 29.99],
        ['id' => 3, 'name' => 'Mouse', 'price' => 29.99],  
    ];
return view("products", ['products'=>$products]);
})->name('products');

Route::view("/contact", "contact")->name('contact');

Route::view("/about", "about")->name('about');

Route::get("/login", function(){
    if(session()->has('estore-user-token')){
        return redirect("/dashboard");
    }else{
        return view("login");
}
})->name('login');

Route::get("/register",  function(){
    if(session()->has('estore-user-token')){
        return redirect("/dashboard");
    }else{
        return view("register");
}
})->name('register');

Route::get('/logout',function(){
    if(session()->has('estore-user-token')){
        session()->pull('estore-user-token');
        return redirect("/login");
    }
})->name('logout');

// Route::get("/get-data",[UsersController::class, "getData"]);

Route::get("/dashboard",[UsersController::class, "getUsers"])->name('dashboard');

Route::post("/handle-login",[UsersController::class, "handleLogin"]);

Route::post("/handle-register",[UsersController::class, "handleRegister"]);


