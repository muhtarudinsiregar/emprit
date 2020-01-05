<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request)
    {
        if (isset($request['error'])) {
            return redirect('/auth?error=true');
        }

        $twitterUser = Socialite::driver('twitter')->user();

        $user = User::where('provider_id', $twitterUser->getId())->first();

        // create user if user login not exist
        // if exist, redirect to dashboard
        if (!$user) {
            $user = new User();
            $user->provider = 'twitter';
            // $user->email = $twitterUser->getEmail();
            $user->name = $twitterUser->getName();
            $user->provider_id = $twitterUser->getId();
            $user->mappingTwitterData($twitterUser);
            $user->save();
        }

        auth()->login($user, true);
        return redirect('dashboard');
    }
}
