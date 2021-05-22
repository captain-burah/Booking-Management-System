<?php

use App\Bookable;
use App\Customer;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('bookables', 'Api\BookableController@index');
// Route::get('bookables/{id}', 'Api\BookableController@show');

Route::apiResource('bookables', 'Api\BookableController')->only(['index', 'show']);

Route::apiResource('customers', 'Api\CustomerController')->only(['index', 'show']);



// Route::get('customers', function (Request $request) {
//     return Customer::all();
// });

// Route::get('customers/{id}', function (Request $request, $customerId) {
//     return Customer::findOrFail($customerId);
// });

// Route::get('bookables/{id}/{optional?}', function (Request $request, $bookableId, $optional = null) {
//     dd($bookableId, $optional);
//     return Bookable::find($bookableId);
// });