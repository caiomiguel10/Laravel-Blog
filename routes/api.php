<?php

use App\Http\Controllers\Api\ApiCategoriaController;
use App\Http\Controllers\Api\ApiPostController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('/posts',ApiPostController::class);
    Route::apiResource('/categorias',ApiCategoriaController::class);

}) ;
   



Route::post('/login', function (Request $request) {
    
    $credentials = $request->only(['email','password']);
    $user = User::whereEmail($credentials['email'])->first();


    if (Auth::attempt ($credentials) === false){
        return response ()->json(data: 'Unauthorized', status:401);
    }

    $user = Auth::user();
    $user->tokens()->delete();
   
    $token = $user->createToken('token',['post:delete']);

    return response()->json($token->plainTextToken);

});