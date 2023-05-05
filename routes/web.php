<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// get all listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latests Listings',
        'listings' => Listing::all()
    ]);
});

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

// simple eloquent route model binding
Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});




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
