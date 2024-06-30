<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::all();
        return view('admin.user.index', compact ('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = DB::table('user')->get();
        return view('admin.user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    $request->validate([
        
        'nama' => 'required|max:45',
        'password' => 'required|max:255',
        'email' => 'required|email|max:100|unique:user',
        'role' => 'required|max:20',
    ],
    [
    
        'nama.required' => 'Nama wajib diisi',
        'nama.max' => 'Nama maksimal 45 karakter',
        'password.required' => 'Password wajib diisi',
        'password.max' => 'Password maksimal 255 karakter',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Format email tidak valid',
        'email.max' => 'Email maksimal 100 karakter',
        'email.unique' => 'Email sudah terisi pada data lain',
        'role.required' => 'Role wajib diisi',
        'role.max' => 'Role maksimal 20 karakter',
    ]);

    // Masukkan data user ke tabel user
    $hashedPassword = bcrypt($request->password);
    User::create([
        'nama' => $request->nama,
        'password' =>  $hashedPassword,
        'email' => $request->email,
        'role' => $request->role,
    ]);
    

    // Redirect ke halaman admin/user setelah selesai
    return redirect('admin/user/index');
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
        $user = User::all()->where('id', $id);
        return view('admin.user.edit', compact ('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
        
            'nama' => 'required|max:45',
            'password' => 'required|max:255',
            'email' => 'required|email|max:100|unique:user',
            'role' => 'required|max:20',
        ],
        [
        
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'password.required' => 'Password wajib diisi',
            'password.max' => 'Password maksimal 255 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.max' => 'Email maksimal 100 karakter',
            'email.unique' => 'Email sudah terisi pada data lain',
            'role.required' => 'Role wajib diisi',
            'role.max' => 'Role maksimal 20 karakter',
        ]);
        $user = User::findOrFail($id);
    
        // Masukkan data user ke tabel user
        $hashedPassword = bcrypt($request->password);
       $user->update([
            'nama' => $request->nama,
            'password' =>  $hashedPassword,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'role' => $request->role,
        ]);

    
        // Redirect ke halaman admin/user setelah selesai
        return redirect('admin/user/index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = DB::table('user')->where('id',$id)->delete();
        return redirect('admin/user/index')->with('success', 'User Berhasil Dihapus!');
    }
}
