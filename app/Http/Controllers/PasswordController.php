<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\ValidationException;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $user = auth()->user();
        return view('dashboard.user.password', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('success', 'your password has been Updated');
        } else {
            return back()->with('error', 'Password saat ini Anda tidak cocok');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}