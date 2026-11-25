<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Menampilkan halaman profil
    public function index()
    {
        return view('profile.index', [
            'user' => Auth::user()
        ]);
    }

    // Memperbarui profil pengguna
    public function update(Request $request)
    {
        $user = User::query()->findOrFail(Auth::id());

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $user->id
            ],
            'phone' => ['nullable', 'string', 'max:20'],
            'position' => ['nullable', 'string', 'max:100'],
            'institution' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string'],
        ]);

        $user->update($validated);

        return redirect()->route('profile')
            ->with('success', 'Profil berhasil diperbarui!');
    }
}
