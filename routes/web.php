<?php

use App\Http\Controllers\UserController;
use App\Mail\SampleFile;
use Illuminate\Support\Facades\Route;

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
  //  return view('welcome');
//});

route::get('/', [UserController::class, 'index'])->name('index');
route::get('/About-us', [UserController::class, 'about'])->name('about');
route::get('/Services', [UserController::class, 'service'])->name('service');
route::get('/Portfolio', [UserController::class, 'portfolio'])->name('portfolio');
route::get('/Contact-us', [UserController::class, 'contact'])->name('contact');
route::get('/seo', [UserController::class, 'search'])->name('search');
route::get('/app', [UserController::class, 'app'])->name('app');
route::get('/social-media', [UserController::class, 'social'])->name('social');
route::get('/web', [UserController::class, 'web'])->name('web');
route::get('/webdesign', [UserController::class, 'webdesign'])->name('webdesign');
route::get('/videoediting', [UserController::class, 'videoediting'])->name('videoediting');
route::get('/graphic', [UserController::class, 'graphic'])->name('graphic');
route::get('/sass', [UserController::class, 'sass'])->name('sass');
route::get('/content', [UserController::class, 'content'])->name('content');
route::get('/booktranslate', [UserController::class, 'booktranslate'])->name('booktranslate');
route::get('/landingpage', [UserController::class, 'landingpage'])->name('landingpage');
route::get('/software', [UserController::class, 'software'])->name('software');
#Route::get('/email', [App\Http\Controllers\UserController::class, 'create']);
#Route::post('/email', [App\Http\Controllers\UserController::class, 'sendEmail'])->name('send.email');
route::post('/Contact-us',function()
{
    $data = request(['name', 'phone','email','subject','message']);
    return $data;
});
