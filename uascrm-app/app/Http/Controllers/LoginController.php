<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required',
        ]);
        
        $data = [
            'nama' => $request->nama,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            // Get the authenticated user
            $user = Auth::user();

            // Redirect based on user role
            if ($user->role == 'admin') {
                return redirect()->route('admin');
            } elseif ($user->role == 'pelanggan') {
                return redirect()->route('home');
            } else {
                return redirect('/'); // Default fallback if role doesn't match
            }
        } else {
            return redirect()->route('login')->with('failed', 'nama atau Password salah');
        }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
