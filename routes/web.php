<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/*
|--------------------------------------------------------------------------
| Naming Convention
|--------------------------------------------------------------------------
| index - Show all listings
| show - Show single listing
| create - Show form to create new listing
| store - Store new listing
| edit - Show form to edit listing
| update - Update listing
| destroy - Delete listing
*/

// get all listings
Route::get('/', [ListingController::class, 'index']);

// show listing form
Route::get('/listings/create', [ListingController::class, 'create']);

// store listing
Route::post('/listings', [ListingController::class, 'store']);

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// update form
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// delete form
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// simple eloquent route model binding
// if this route is kept above then /listings/create will be falling for this route and that will go to 404
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show register create form
Route::get('/register', [UserController::class, 'create']);

// create new user
Route::post('/users', [UserController::class, 'store']);

// log user out
Route::post('/logout', [UserController::class, 'logout']);

// show login form
Route::get('/login', [UserController::class, 'login']);

// login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// // get single listing
// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);
//     if($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });





// basic web routes

// // adding new routes
// // '/hello' === 'hello'
// Route::get('/hello', function () {
//     return 'Hello World!';
// });

// // adding routes with response methods, status code and headers [html]
// Route::get('/response-html', function () {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/html');
// });

// // adding routes with response methods, status code and headers [plain text]
// Route::get('/response-plain', function () {
//     return response('<h1>Hello World</h1>', 404)
//         ->header('Content-Type', 'text/text');
// });

// // wild card endpoint
// // adding routes with parameters
// Route::get('/wildcard/{id}', function ($id) {
//     return 'Wildcard no - ' . $id;
// });

// // wild card endpoint with conditions
// // adding regex will do

// // dump and die [dd] -> will return a 500 status as this will stop the code of the request
// // it's not gonna pass anything pass that
// Route::get('/wildcard/{id}', function ($id) {
//     dd($id);
//     return 'Wildcard no - ' . $id;
// })->where('id', '[0-9]+');

// // dump die and debug [ddd] -> will return a 200 status as this will stop the code of the request
// // it's not gonna pass anything pass that and also give the debug option
// // the debugger will give the cookies, session values, local storage values, headers and body contents
// Route::get('/wildcard/ddd/{id}', function ($id) {
//     ddd($id);
//     return 'Wildcard no - ' . $id;
// })->where('id', '[0-9]+');


// // requests and query parameters
// Route::get('/search', function(Request $request) {
//     // dd($request);
//     return $request->name . '  ' . $request->city;
// });
