<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Route::get('/translations', function () {
    App::setLocale($request->lang);
    session()->put('locale', $request->lang);

    return redirect()->back();
}); */
Route::get('change/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return Redirect::back();
    });
/*     Route::post('change/{locale}', function ($locale) {
        Session::put('locale', $locale);
        return response()->json(['status' => 'success']);
    }); */