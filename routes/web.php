<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Models\Subject;
use \App\Models\ServiceType;
use \App\Models\ProjectType;
use \App\Models\Demand;
use \App\Models\File;

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
        'projectTypes' => ProjectType::all(),
    ]);
});

Route::get('/services', function () { /**/ 
    return Inertia::render('Services');
});

Route::post('/form', 'App\Http\Controllers\DemandController@store');
Route::get('/test', function () {
    return Inertia::render('File',[
        'file' => App\Http\Controllers\DemandController::showFile(),
    ]);
});

Route::get('/thanks', function () {
    return Inertia::render('Recontacts');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'requestes' => Route::has('login'),
    ]);
});

Route::delete('service/{id}', 'App\Http\Controllers\ServiceController@destroy');
Route::delete('subject/{id}', 'App\Http\Controllers\SubjectController@destroy');
Route::delete('project/{id}', 'App\Http\Controllers\ProjectController@destroy');
Route::put('service/{id}', 'App\Http\Controllers\ServiceController@update');
Route::put('subject/{id}', 'App\Http\Controllers\SubjectController@update');
Route::put('project/{id}', 'App\Http\Controllers\ProjectController@update');
Route::post('service/', 'App\Http\Controllers\ServiceController@store');
Route::post('subject/', 'App\Http\Controllers\SubjectController@store');
Route::post('project/', 'App\Http\Controllers\ProjectController@store');

Route::get('/demande/{id}', function ($id) {
    $urls = File::where('demand_id', $id)->orderBy('id')->get();
    return Inertia::render('Demande', [
        'demand' => Demand::find($id),
        'service' => ServiceType::find(Demand::find($id)->service_type_id)->serviceType,
        'project' => ProjectType::find(Demand::find($id)->project_type_id)->projectType,
        'subject' => Subject::find(Demand::find($id)->subject_id)->subject,
        'urls' => $urls->toArray(),
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'subjects' => Subject::all(),
        'serviceTypes' => ServiceType::all(),
        'projectTypes' => ProjectType::all(),
        'demands' => Demand::all(),
        'file' => File::all()
    ]);
})->name('dashboard');
