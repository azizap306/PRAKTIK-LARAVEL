<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,DashboardController,WebController,ShopController,KalkulatorController,MahasiswaController,EmployeController,AdminController,StudentController};

Route::get('/',fn()=>redirect('/home'));
Route::get('/web',[WebController::class,'home']);
Route::get('/profil/{nama}',[WebController::class,'profil']);
Route::get('/biodata',[WebController::class,'biodata']);
Route::get('/home',[ShopController::class,'home'])->name('shop.home');
Route::get('/product',[ShopController::class,'products'])->name('shop.products');
Route::get('/produk/detail/{harga}',[ShopController::class,'detail'])->whereNumber('harga')->name('shop.detail');
Route::get('/about',[ShopController::class,'about'])->name('shop.about');
Route::get('/kalkulator',[KalkulatorController::class,'home']);
Route::post('/kalkulator/proses',[KalkulatorController::class,'proses'])->name('calculator.multiply');
Route::get('/kalkulator/segitiga',[KalkulatorController::class,'segitiga']);
Route::post('/kalkulator/segitiga',[KalkulatorController::class,'prosesSegitiga'])->name('calculator.triangle');
Route::get('/daftar/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.post');
Route::middleware('admin.login')->group(function(){
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard',[DashboardController::class,'home'])->name('dashboard');
    Route::get('/dashboard/product',[DashboardController::class,'product'])->name('dashboard.product');
    Route::get('/dashboard/service',[DashboardController::class,'service'])->name('dashboard.service');
    Route::get('/dashboard/contact',[DashboardController::class,'contact'])->name('dashboard.contact');
    Route::get('/dashboard/about',[DashboardController::class,'about'])->name('dashboard.about');
    Route::resource('/employe',EmployeController::class)->except(['show']);
    Route::resource('/students',StudentController::class)->except(['show']);
    Route::resource('/admins',AdminController::class)->except(['show']);
});
