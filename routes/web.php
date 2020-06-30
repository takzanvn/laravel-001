<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
$html = <<<'HTML'
<div style='text-align:center'>
    <h1>Welcome to website cua Viet Anh</h1>    
    <h2>Day la trang chu</h2>
</div>
HTML;
echo $html;
});

Route::get('/about', function(){
$about = <<<'ABOUT'
<div style='text-align:center; font-family: "Arial"'>
    <h1>Tôi là Nguyễn Việt Anh</h1>
    <h3>Tôi là Designer & Frontend Developer</h3>
    <h3>Ước mơ của tôi là trở thành Fullstack Developer</h3>
    <h3>Hiện tôi đang là học viên tại trung tâm Awesome Academy</h3>
    <p><a href="/">Home</a></p>
</div>
ABOUT;
echo $about;
});

Route::prefix('admin')->as('admin.')->group(function(){
    Route::get('/', 'Admin\AdminController@index');

    Route::resource('payments', 'PaymentController');
});

