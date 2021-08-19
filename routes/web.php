<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Models\Subject;
use \App\Models\ServiceType;
use \App\Models\ProjectType;
use \App\Models\Demand;

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
    return Inertia::render('Welcome', [
        'subjects' => Subject::all(),
        'serviceTypes' => ServiceType::all(),
        'projectTypes' => ProjectType::all()
    ]);
});

Route::get('/contacts', function () {
    return Inertia::render('Contacts', [
        'subjects' => Subject::all(),
        'serviceTypes' => ServiceType::all(),
        'projectTypes' => ProjectType::all()
    ]);
});

Route::get('/services', function () {
    return Inertia::render('Services');
});

Route::post('/form', 'App\Http\Controllers\DemandController@store');

Route::get('/recontacts', function () {
    return Inertia::render('Recontacts');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'requestes' => Route::has('login'),
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'subjects' => Subject::all(),
        'serviceTypes' => ServiceType::all(),
        'projectTypes' => ProjectType::all(),
        'demands' => Demand::all()
    ]);
})->name('dashboard');
