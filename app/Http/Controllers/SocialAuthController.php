<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Route;
use Str;

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
        $social_user = Socialite::driver('google')->stateless()->user();

        if(!$social_user || $social_user->email == null || ($social_user->user['hd'] ?? '') != "pontomais.com.br")
        {
            return redirect()->route('login')->with('error', __('auth.social_login.invalid_login'));
        }

        $request->session()->put('user-avatar', $social_user->avatar ?? asset('images/generic-avatar.png'));

        $user = User::where('email', $social_user->email)->first();

        if ($user)
        {
            auth()->login($user);
            return redirect()->route('dashboard.index')->with(
                'success',
                __('auth.social_login.login_success', ['provider' => 'Google'])
            );
        } else
        {
            $user = User::create([
                'name' => $social_user->name,
                'email' => $social_user->email,
                'password' => bcrypt(Str::random(10)),
            ]);
            auth()->login($user);
            return redirect()->route('dashboard.index')->with(
                'success',
                __('auth.social_login.registration_success', ['provider' => 'Google'])
            );
        }
    }
}
