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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/admin', 'AdminController@index');
//Route::get('/superadmin', 'SuperAdminController@index');

    //  MANAGEMENT
   // Route::prefix('configurations')->group(function(){
        //  UTILISATEURS
        Route::get('/manage/users/all','App\Http\Controllers\Backend\Manage\UsersController@index' )->name('manage.users.all');
        Route::get('/manage/users/add','App\Http\Controllers\Backend\Manage\UsersController@create' )->name('manage.users.create');
        Route::post('/manage/users/store','App\Http\Controllers\Backend\Manage\UsersController@store' )->name('manage.users.store');
        Route::get('/manage/users/edit/{id}','App\Http\Controllers\Backend\Manage\UsersController@edit' )->name('manage.users.edit');
        Route::post('/manage/users/update/{id}','App\Http\Controllers\Backend\Manage\UsersController@update' )->name('manage.users.update');
        Route::get('/manage/users/destroy/{id}','App\Http\Controllers\Backend\Manage\UsersController@destroy' )->name('manage.users.destroy');
        //  EMPLOYERS
        // Route::get('/etudiant/annee/view','App\Http\Controllers\Backend\Configuration\AnneeAcademiqueController@show')->name('configurations.etudiant.annee.show');
        // Route::get('/etudiant/annee/add','App\Http\Controllers\Backend\Configuration\AnneeAcademiqueController@create')->name('configurations.etudiant.annee.create');
        // Route::post('/etudiant/annee/store','App\Http\Controllers\Backend\Configuration\AnneeAcademiqueController@store')->name('configurations.etudiant.annee.store');
        // Route::get('/etudiant/annee/edit/{id}','App\Http\Controllers\Backend\Configuration\AnneeAcademiqueController@edit')->name('configurations.etudiant.annee.edit');
        // Route::post('/etudiant/annee/update/{id}','App\Http\Controllers\Backend\Configuration\AnneeAcademiqueController@update')->name('configurations.etudiant.annee.update');
        // Route::get('/etudiant/annee/destroy/{id}','App\Http\Controllers\Backend\Configuration\AnneeAcademiqueController@destroy')->name('configurations.etudiant.annee.destroy');

        // //  ASSIGNER COURS
        // Route::get('/assigner/cours/view','App\Http\Controllers\Backend\Configuration\AssignerCoursController@show')->name('configurations.assigner.cours.show');
        // Route::get('/assigner/cours/add','App\Http\Controllers\Backend\Configuration\AssignerCoursController@create')->name('configurations.assigner.cours.create');
        // Route::post('/assigner/cours/store','App\Http\Controllers\Backend\Configuration\AssignerCoursController@store')->name('configurations.assigner.cours.store');
        // Route::get('/assigner/cours/edit/{promotion_id}','App\Http\Controllers\Backend\Configuration\AssignerCoursController@edit')->name('configurations.assigner.cours.edit');
        // Route::post('/assigner/cours/update/{promotion_id}','App\Http\Controllers\Backend\Configuration\AssignerCoursController@update')->name('configurations.assigner.cours.update');
        // Route::get('/assigner/cours/destroy/{promotion_id}','App\Http\Controllers\Backend\Configuration\AssignerCoursController@destroy')->name('configurations.assigner.cours.destroy');
        // Route::get('/assigner/cours/details/{promotion_id}','App\Http\Controllers\Backend\Configuration\AssignerCoursController@details')->name('configurations.assigner.cours.details');
 //   });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
