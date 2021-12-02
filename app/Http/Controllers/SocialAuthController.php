<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Route;

class SocialAuthController extends Controller
{
    public static function routes()
    {
        Route::prefix('/login/social_login/google')->group(function () {
            Route::get('/',         [self::class, 'googleLogin'])->name('social_login.google_login');
            Route::get('/callback', [self::class, 'googleLoginCallback'])->name('social_login.google_callback');
        });
    }

    /**
     * function googleLogin
     *
     * @param Request $request
     * @return
     */
    public function googleLogin(Request $request)
    {
        //https://developers.google.com/identity/sign-in/web/sign-in
        return Socialite::driver('google')
            ->with(['hd' => 'pontomais.com.br']) //Restringindo por domínio: https://laravel.com/docs/8.x/socialite#optional-parameters
            ->redirect();
    }

    /**
     * function googleLoginCallback
     *
     * @param Request $request
     * @return
     */
    public function googleLoginCallback(Request $request)
    {
        $user = Socialite::driver('google')->stateless()->user();
        dd($user);
        /*
        Laravel\Socialite\Two\User {
            +token: "...."
            +refreshToken: null
            +expiresIn: 3594
            +id: "114623339790769105709"
            +nickname: null
            +name: "Tiago França Fernandes"
            +email: "tiago.fernandes@pontomais.com.br"
            +avatar: "https://lh3.googleusercontent.com/a-/AOh14GhfrhDq7ZZXKh7uOpT8WrklbHKpXDx39JljtnV2=s96-c"
            +user: array:13 [▶
                "sub" => "114623339790769105709"
                "name" => "Tiago França Fernandes"
                "given_name" => "Tiago França"
                "family_name" => "Fernandes"
                "profile" => "https://plus.google.com/114623339790769105709"
                "picture" => "https://lh3.googleusercontent.com/a-/AOh14GhfrhDq7ZZXKh7uOpT8WrklbHKpXDx39JljtnV2=s96-c"
                "email" => "tiago.fernandes@pontomais.com.br"
                "email_verified" => true
                "locale" => "pt-BR"
                "hd" => "pontomais.com.br"
                "id" => "114623339790769105709"
                "verified_email" => true
                "link" => "https://plus.google.com/114623339790769105709"
            ]
            +"avatar_original": "https://lh3.googleusercontent.com/a-/AOh14GhfrhDq7ZZXKh7uOpT8WrklbHKpXDx39JljtnV2=s96-c"
            }
        */
    }
}
