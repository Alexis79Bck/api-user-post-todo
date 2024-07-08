<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UserController::class, 'index'])->name('api.v1.users.index');
Route::get('/users/{user}',[UserController::class, 'show'])->name('api.v1.users.show');


// Route::get('/test/users', function () {

//     $users = User::with("profile", "posts")->get()->random()->makeHidden(["created_at", "updated_at"]);

//     return response()->json([
//         "status" => "OK",
//         "data" => $users->toArray(),        
//     ], 200);
// });
