<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test/users', function () {

    $users = User::with("profile", "posts")->get()->random()->makeHidden(["created_at", "updated_at"]);

    return response()->json([
        "status" => "OK",
        "data" => $users->toArray(),        
    ], 200);
});
