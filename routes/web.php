<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobApplicants;
use App\Http\Controllers\JobListController;
use App\Http\Controllers\FlutterJobController;


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
//////////////////////////////////////////////////////////////////////////
//                          Dashboard                                   //
//////////////////////////////////////////////////////////////////////////

Route::resource('jobs', JobListController::class);

Route::get('/applicants', [JobApplicants::class, 'show'])->name('applicants');
Route::get('/view/{cv}', [JobApplicants::class, 'viewPdf'])->name('view');


