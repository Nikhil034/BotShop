<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;


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
    //dd(app());
    return view('welcome');
});


Route::get('/Profile',[ProfileController::class,'index'])->name('ProfilePagecall');
Route::get('/save',[ProfileController::class,'Savecall'])->name('SaveCall');
Route::post('Profile/login',[ProfileController::class,'Logincall'])->name('Logincall');
Route::get('/Register',[ProfileController::class,'newuser'])->name('NewRegister');
Route::post('/saveuser',[ProfileController::class,'saveuser'])->name('SaveRegister');


//shoproute are list here
Route::get('/Shop',[ShopController::class,'showbottles'])->name('ShowProduct');
Route::get('/Shop/Admin/{token}',[ShopController::class,'AdminToken'])->name('AdminToken');
Route::post('/addproduct',[ShopController::class,'addbottle'])->name('AddBottle');
Route::get('AddintoBucket/{pid}',[ShopController::class,'AddintoBucket'])->name('AddProductIntoBucket');
Route::get('/Bucket',[ShopController::class,'ViewBucket'])->name('DisplayBucket');
Route::get('/BuyNow/{pid}',[ShopController::class,'BuyNowCall'])->name('ProductBuy');
Route::post('/PlaceOrder',[ShopController::class,'PlaceOrder'])->name('PlaceOrder');

Route::get('/Logout', function () {
    if(session()->has('AuthUser'))
    {
        session()->pull('AuthUser',null);

    }
    return redirect('Profile');
});


Route::get('/ApiUsers',[ShopController::class,'Apicall']);

