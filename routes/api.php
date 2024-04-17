<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\OrderController;



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

// http:/127.0.0.1:8000/api/getQuest/3 - postman

Route::post('/getQuests', [QuestController::class, 'index']); // получение всех квестов
Route::post('/getQuest/{id}', [QuestController::class, 'show']); // получение одного квеста

Route::post('/getTag', [TagsController::class, 'index']); //получение всех тегов

Route::post('/postOrder', [OrderController::class, 'store']);
Route::post('/getOrders', [OrderController::class, 'index']);
Route::post('/getOrder/{id}', [OrderController::class, 'show']);
