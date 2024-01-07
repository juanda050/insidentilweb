<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan import Auth

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.pages.profiles');
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
        ]);

        if ($request->hasFile('avatar')) {
            $avatarName = time() . '.' . $request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('avatars'), $avatarName);

            // Pastikan user sudah login sebelum memperbarui avatar
            if (Auth::check()) {
                Auth::user()->update(['avatar' => $avatarName]);
                return back()->with('success', 'Foto profil berhasil diperbarui.');
            } else {
                return back()->with('error', 'Autentikasi pengguna gagal.');
            }
        }

        return back()->with('error', 'Gagal memperbarui foto profil.');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255'
        ]);

        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];

        if ($user->save()) {
            return back()->with('message', 'Profile Updated');
        } else {
            return back()->with('error', 'Failed to update profile');
        }
    }
}
