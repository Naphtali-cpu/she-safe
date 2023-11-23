<?php

use App\Http\Controllers\payments\MpesaController;
use App\Models\RequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('payment/{id}', [MpesaController::class, 'confirm']);
Route::any('/callback', function () {
    $data = file_get_contents('php://input');;
    $mrequest = new RequestModel();
    $mrequest->request = $data;
    $mrequest->save();
    $mpesa = new MpesaController();
    $mpesa->stkCallbackResponse = $data;
    $mpesa->ReceiveMpesa();
    return $data;
});
