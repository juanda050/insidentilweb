<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser);

            // Jika 'type' yang ada adalah 1, artinya admin
            if ($existingUser->type === 'admin') {
                return redirect()->intended('admin/home');
            } else {
                return redirect()->intended('home');
            }
        } else {
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('123456'),
                'type' => 0, // Setiap pengguna baru akan memiliki tipe 0 sebagai pengguna biasa
            ]);

            Auth::login($newUser);

            return redirect()->intended('home');
        }
    }
}
