<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class TwitterController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function callback()
    {
        $twitterUser = Socialite::driver('twitter')->user();

        // Save token to session to make request
        // TODO: Can save tokens it to database to make requests later
        // TODO: create package to authorize and have API methods in one package?

        Session::put('access_token', [
            'oauth_token' => $twitterUser->token,
            'oauth_token_secret' => $twitterUser->tokenSecret
        ]);

        $user = User::firstOrCreate([
            'twitter_id' => $twitterUser->getId()
        ], [
            'name' => $twitterUser->getName(),
            'username' => $twitterUser->getNickname(),
            'twitter_id' => $twitterUser->getId(),
            'avatar' => $twitterUser->avatar_original,
        ]);

        Auth::login($user, true);

        return redirect('/');
    }
}
