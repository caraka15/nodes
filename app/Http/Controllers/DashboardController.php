<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $user = auth()->user();
        $postCount = Post::count();
        return view('dashboard.user.index', [
            'user' => $user,
            'postCount' => $postCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        if ($request->username != $user->username) {
            $rules['username'] = ['required', 'min:3', 'max:255', 'unique:users'];
        }


        // Periksa apakah pengguna mengonfirmasi password saat ini
        if (!Hash::check($request->password, $user->password)) {
            return redirect('/dashboard/user/' . $user->username . '/edit')->with('error', 'Password saat ini salah');
        }

        $validateData = $request->validate($rules);

        // Lanjutkan dengan menyimpan data jika validasi berhasil
        User::where('id', $user->id)->update($validateData);

        return redirect('/dashboard/user/')->with('success', 'Profil Anda telah diperbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}