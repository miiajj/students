<?php

    use App\Http\Controllers\StudentController;
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

//    Route::get('/', function () {
//        return view('welcome');
//    });
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::post('/students/import', [StudentController::class, 'import'])->name('students.import');
    Route::delete('/students/destroy', [StudentController::class, 'destroy'])->name('students.destroy');
