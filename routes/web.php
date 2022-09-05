<?php

use App\Http\Controllers\Admin\EpisodeController as AdminEpisodeController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/episodes', [EpisodeController::class, 'index']);

Route::get('/episodes/{episode}', [EpisodeController::class, 'show']);

// Admin
// Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
//     Route::get('/episodes/create', [EpisodeController::class, 'create']);    
// });

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::get('/episodes/create', [AdminEpisodeController::class, 'create']);
});
