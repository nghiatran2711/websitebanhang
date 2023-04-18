<?php

use App\Http\Controllers\TestValidateController;
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

Route::get('/abc-123', function () {
    return view('child')->with('version', 'version 2');
});

Route::post('/test-validate', [TestValidateController::class, 'createTest'])->name('testValidate');

Route::get('/view-form-validate', function(){
    return view('form_validate');
});
