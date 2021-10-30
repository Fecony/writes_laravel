<?php

use App\Http\Controllers\Auth\TwitterController;
use Delight\Str\Str;
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

Route::view('/app', 'app')->name('app');

Route::get('/livewire', \App\Http\Livewire\Editor::class);

Route::get('/test', function () {
    /**
     * Input Data = String
     *
     * Need to do:
     * 1) Cut string by regex
     * 2) Cut string to 280 characters
     * 3) Add prefix/postfix and still fit 280 characters
     *
     */

//    function chunk($content, $maxSize)
//    {
//        $parts = [];
//
//        while (true) {
//            $content = trim((string)$content);
//            if (strlen($content) <= $maxSize) {
//                $parts[] = $content;
//                break;
//            }
//            $offset = -(strlen($content) - $maxSize);
//            $cut_at_position = strrpos($content, ' ', $offset);
//            if (false === $cut_at_position) {
//                $cut_at_position = $maxSize;
//            }
//            $parts[] = substr($content, 0, $cut_at_position);
//            $content = substr($content, $cut_at_position);
//        }
//
//        return $parts;
//    }
//
//    function flatten(array $array) {
//        $return = array();
//        array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
//        return $return;
//    }

//    $content = "
//    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
//
//    ---
//
//    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum tempus egestas sed. Pulvinar elementum integer enim neque volutpat ac tincidunt vitae. Habitant morbi tristique senectus et netus et malesuada fames. Odio ut enim blandit volutpat. Quisque id diam vel quam elementum pulvinar etiam. Duis tristique sollicitudin nibh sit amet commodo nulla. Arcu risus quis varius quam quisque id. Arcu non sodales neque sodales ut etiam sit amet nisl. Odio ut enim blandit volutpat maecenas. Enim nunc faucibus a pellentesque sit amet porttitor eget dolor. Risus viverra adipiscing at in tellus integer feugiat scelerisque. Dolor sit amet consectetur adipiscing elit. Lobortis elementum nibh tellus molestie nunc non blandit massa enim. Fermentum odio eu feugiat pretium. Enim facilisis gravida neque convallis a cras semper auctor neque. Interdum velit laoreet id donec.Felis eget nunc lobortis mattis aliquam faucibus purus in. Orci a scelerisque purus semper eget duis at tellus at. Nisi quis eleifend quam adipiscing vitae. Molestie a iaculis at erat pellentesque adipiscing commodo elit. Amet purus gravida quis blandit turpis. Scelerisque felis imperdiet proin fermentum leo. Odio euismod lacinia at quis. In nisl nisi scelerisque eu. Venenatis lectus magna fringilla urna porttitor. Aenean et tortor at risus viverra adipiscing at. Amet aliquam id diam maecenas ultricies.Ultrices tincidunt arcu non sodales neque sodales. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Ut consequat semper viverra nam libero justo laoreet sit amet. Commodo sed egestas egestas fringilla phasellus. At in tellus integer feugiat scelerisque varius morbi enim nunc. Aliquam faucibus purus in massa tempor nec feugiat nisl. Mollis aliquam ut porttitor leo a diam sollicitudin tempor. Dui faucibus in ornare quam viverra. Urna neque viverra justo nec ultrices dui sapien. Et leo duis ut diam quam nulla. Etiam sit amet nisl purus in mollis nunc. Ac odio tempor orci dapibus ultrices in. Tellus pellentesque eu tincidunt tortor aliquam. Id semper risus in hendrerit gravida rutrum quisque non. Sagittis vitae et leo duis ut. Duis ultricies lacus sed turpis. At lectus urna duis convallis convallis.Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Lectus arcu bibendum at varius vel pharetra. Nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus. At erat pellentesque adipiscing commodo elit at imperdiet dui accumsan. Est ultricies integer quis auctor. Eu non diam phasellus vestibulum lorem sed. Viverra mauris in aliquam sem. Id diam maecenas ultricies mi. Maecenas pharetra convallis posuere morbi leo urna molestie. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non. At varius vel pharetra vel turpis. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Consectetur adipiscing elit pellentesque habitant morbi. Aliquam etiam erat velit scelerisque in dictum non consectetur a. Consequat interdum varius sit amet. Nibh tortor id aliquet lectus proin nibh. Non curabitur gravida arcu ac tortor dignissim. At volutpat diam ut venenatis tellus in metus vulputate. Dis parturient montes nascetur ridiculus.Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Egestas sed sed risus pretium quam. Nulla facilisi morbi tempus iaculis. Ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum. Vel eros donec ac odio tempor orci dapibus ultrices. Et netus et malesuada fames ac turpis egestas integer. Amet massa vitae tortor condimentum. A scelerisque purus semper eget duis at. Leo vel fringilla est ullamcorper eget. Fermentum leo vel orci porta non pulvinar. Sem et tortor consequat id porta nibh. Viverra accumsan in nisl nisi. Gravida in fermentum et sollicitudin ac. Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis.";

//    $chunks = chunk($content, 280);
//    $res = [];
//    foreach ($chunks as $chunk) {
//        $res[] = [
//            'data' => $chunk,
//            'length' => strlen($chunk)
//        ];
//    }
});

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
