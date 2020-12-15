<?php

use App\Http\Controllers\Auth\TwitterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/twitter', [TwitterController::class, 'redirect'])->name('twitter.login');
    Route::get('/twitter/callback', [TwitterController::class, 'callback']);
});

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::get('/tweet', function () {

    $tweets = [
        'tweet 1',
        'tweet 2',
    ];

    $lastId = null;

//    foreach ($tweets as $tweet) {
//        $response = Twitter::postTweet([
//            'status' => $tweet,
//            'format' => 'object',
//            'in_reply_to_status_id' => $lastId
//        ]);
//
//        $lastId = $response->id;
//    }

//    $tw = Twitter::postTweet(['status' => 'hel2los', 'format' => 'object']);
//    dd($tw, $tw->id);
});
