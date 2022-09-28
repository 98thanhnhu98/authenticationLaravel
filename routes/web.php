<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return redirect('/products');
// });


// Route::resource('products',ProductController::class);


//home
Route::get('/',function(){
    return view('welcome');
});

//example session
// Route::post('user',[UserAuth::class,'userLogin']);
//login
// Route::view("login",'login');
//view profile
// Route::view("profile",'profile');
// return employees
Route::get('/employee', function () {
    return redirect('/employees');
});
// call to EmployeeControoler anh return to employees
Route::resource('employees',EmployeeController::class);

//login example
// Route::get('/login',function(){
//     if(session()->has('user'))
//     {
//         return redirect('profile');
//     }
//     return redirect('login');
// });

//log out example
// Route::get('/logout',function(){
//     if(session()->has('user'))
//     {
//         session()->pull('user');
//     }
//     return redirect('login');
// });
Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');

$user = Auth::user();
$id = Auth::id();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
