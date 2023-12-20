<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/',function(){
    return response()->json(["message"=>"API funcionando!"]);
});

Route::resource('/pessoas',PessoaController::class)->parameters([
    'pessoas' => 'pessoa'
]);

Route::group(['middleware' => ['web']], function () {

    Route::get('/auth/redirect', function () {        
        return Socialite::driver('google')->redirect();
    });
    
    Route::get('/auth/callback', function () {
        $user = Socialite::driver('google')->user(); 

        return response()->json(["name"=> $user->getName(),"token"=>"Bearer ".$user->token]);
    });
});

