<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use App\Models\Diskon;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::get()->all();
        $diskon = Diskon::get()->all();
        $pelanggan = Pelanggan::get()->all();
        return view('admin.pelanggan.index', compact('pelanggan','diskon','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = User::get()->all();
        $diskon = Diskon::get()->all();
        $pelanggan = Pelanggan::get()->all();
        return view('admin.pelanggan.create', compact('pelanggan','diskon','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'user_id' => $request->user_id,
            'diskon_id' => $request->diskon_id,
            
        ]);

        // Redirect ke halaman admin/penyedia setelah selesai
        return redirect('admin/pelanggan/index')->with('success', 'Berhasil Menambahkan Data Penyedia Baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::get()->all();
        $diskon = Diskon::get()->all();
        $pelanggan = Pelanggan::get()->where('id', $id);
        return view('admin.pelanggan.edit', compact('pelanggan','diskon','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'user_id' => $request->user_id,
            'diskon_id' => $request->diskon_id,
            
        ]);

        // Redirect ke halaman admin/penyedia setelah selesai
        return redirect('admin/pelanggan/index')->with('success', 'Berhasil Menambahkan Data Penyedia Baru!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        //
    }
}
