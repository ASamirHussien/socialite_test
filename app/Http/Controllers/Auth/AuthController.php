<?php
namespace App\Http\Controllers\Auth;

use Auth;
use Socialite;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{

    protected $redirectTo = '/home';

    /**
     * request Authorization code with client_id 
     * and url_redirect and grant type = authorization code
     *
     * @param  string  $provider (microsoft, github, google)
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * recive Authorization code and send it with client_id and url_redirect and client_secret
     * to recieve acess token with acess token we can get user profile
     *
     * @param  string  $provider (microsoft, github, google)
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }


    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        
        return User::create([
            'name' => is_null($user->name) ? $user->nickname : $user->name,
            'email' => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }
}