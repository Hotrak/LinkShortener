<?php

use App\Http\Controllers\v1\LinkShortenerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('links', LinkShortenerController::class);

Route::get('users/{id}/links', [LinkShortenerController::class, 'userLinks']);
