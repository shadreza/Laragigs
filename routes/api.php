<?php

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


// API routes basics

// the basic and custom api routes are being made here
// Route::get('/posts', function () {
//     return response()->json([
//         'posts' => [
//             [
//                 'title' => 'postOne',
//                 'description' => 'this is the first post'
//             ],
//             [
//                 'title' => 'postTwo',
//                 'description' => 'this is the second post'
//             ],
//             [
//                 'title' => 'postThree',
//                 'description' => 'this is the third post'
//             ],
//         ]
//     ]);
// });
