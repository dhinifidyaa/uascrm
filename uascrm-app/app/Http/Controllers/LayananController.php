<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Penyedia;
use DB;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $layanan = Layanan::get()->all();
        $penyedia = Penyedia::get()->all();
        return view('admin.layanan.index', compact('layanan', 'penyedia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $layanan = Layanan::all();
        $penyedia = Penyedia::all();
        return view('admin.layanan.create', compact ('layanan','penyedia'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Layanan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect('admin/layanan')->with('success', 'Berhasil Menambahkan Layanan Baru!');
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
        $layanan = Layanan::all()->where('id', $id);
        $penyedia = Penyedia::all();
        return view('admin.layanan.edit', compact('layanan', 'penyedia'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
    ]);

    // Temukan layanan berdasarkan id
    $layanan = Layanan::findOrFail($id);
    
    // Update layanan dengan data yang divalidasi
    $layanan->update([
        'nama' => $request->input('nama'),
        'deskripsi' => $request->input('deskripsi'),
        'harga' => $request->input('harga'),
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect('/admin/layanan/index')->with('success', 'Layanan berhasil diperbarui!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('layanan')->where('id',$id)->delete();
        return redirect('admin/layanan/index')->with('success', 'User Berhasil Dihapus!');;
    }
}
