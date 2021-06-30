<?php

use App\Http\Controllers\HistoryController;
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

// ================ nav bar ===============
Route::get('/', function () {
    return view('index');
});

Route::get('jobs/jobsIndex', function () {
    return view('jobs/jobsIndex');
})->name('jobsIndex');

Route::get('jobs/jobsSearch', function () {
    return view('jobs/jobsSearch');
})->name('jobsSearch');

Route::get('jobs/map', function () {
    return view('jobs/map');
})->name('map');

Route::get('jobs/myJobs', function () {
    return view('jobs/myJobs');
});

Route::get('jobs/jobsDetail', function () {
    return view('jobs/jobsDetail');
});

// Route::get('jobs/history', function () {
//     return view('jobs/history');
// });

// Route::get('jobs/resume', function () {
//     return view('jobs/resume');
// });

// Route::get('history/edit', function () {
//     return view('history/edit');
// });

// ================================================
Route::resource('history', 'HistoryController');

// Route::get('/history/edit/{id}', 'HistoryController@edit');
// Route::get('/history/edit/{id}', function ($id){
//     return view('/history/edit/'.$id);
// });

// ========================== View ========================== 
// Route::get('/history', 'HistoryController@index')->name('history.index');

// // ========================== Create ==========================
// Route::get('/history/create', 'HistoryController@create')->name('history.create');
// Route::post('/history/store', 'HistoryController@store')->name('history.store');

// // ========================== Update ==========================
// Route::get('/history/edit/{id}', 'HistoryController@edit')->name('history.edit');
// Route::post('/history/update/{id}', 'HistoryController@update')->name('history.update');

// // ========================== Delete ==========================
// Route::get('/history/delete/{id}', 'HistoryController@destroy')->name('history.delete');

// Route::get('/history', 'HistoryController@index');
// Route::get('/history/create', 'HistoryController@create');
// Route::post('/history', 'HistoryController@store');
// Route::get('/history/edit/{id}', 'HistoryController@edit');
// Route::put('/history/edit/{id}', 'HistoryControllerr@update');
// Route::delete('/history/delete/{id}', 'HistoryController@destroy');


// Route::get('/', 'pagesController@home');
// Route::get('/jobs/index', 'HistoryController@index');
// Route::get('/jobs/delete', 'HistoryController@delete');
// Route::get('/jobs/create', 'HistoryController@create');
// Route::post('/jobs/index', 'HistoryController@store')->name('index');
// Route::post('/jobs/index', 'HistoryController@destroy')->name('delete');



// ============ jobs detail ===========
Route::get('jobs/allJobs', function () {
    return view('jobs/allJobs');
})->name('allJobs');

Route::get('jobs/interestedJobs', function () {
    return view('jobs/interestedJobs');
})->name('interestedJobs');

Route::get('jobs/applyJobs', function () {
    return view('jobs/applyJobs');
})->name('applyJobs');

Route::get('jobs/historyCompanyJobs', function () {
    return view('jobs/historyCompanyJobs');
})->name('historyCompanyJobs');



// ============================== Ent ========================================
// ======= lonin ===========
Route::get('login/index', function () {
    return view('login/index');
})->name('index');

// ============ register ===========
Route::get('login/Register-appl', function () {
    return view('login/Register-appl');
})->name('Register-appl');

Route::get('login/Register-job', function () {
    return view('login/Register-job');
})->name('Register-job');

// ============ Entrep ===========
Route::get('Entrepreneur/entMaster', function () {
    return view('Entrepreneur/entMaster');
})->name('entMaster');

Route::get('Entrepreneur/indexEntrepreneur', function () {
    return view('Entrepreneur/indexEntrepreneur');
})->name('indexEntrepreneur');

Route::get('Entrepreneur/entIndex', function () {
    return view('Entrepreneur/entIndex');
})->name('entIndex');
Route::get('Entrepreneur/entPost', function () {
    return view('Entrepreneur/entPost');
})->name('entPost');
Route::get('Entrepreneur/entProfile', function () {
    return view('Entrepreneur/entProfile');
})->name('entProfile');
Route::get('Entrepreneur/entCheck', function () {
    return view('Entrepreneur/entCheck');
})->name('entCheck');
