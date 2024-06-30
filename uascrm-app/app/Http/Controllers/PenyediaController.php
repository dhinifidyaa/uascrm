<?php

namespace App\Http\Controllers;
use App\Models\Penyedia;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class PenyediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penyedia = Penyedia::all();
        $user = User::get()->all();
        return view('admin.penyedia.index', compact ('penyedia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $penyedia = Penyedia::all();
        $user = User::all();
        return view('admin.penyedia.create', compact ('penyedia','user'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Penyedia::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect ke halaman admin/penyedia setelah selesai
        return redirect('admin/penyedia')->with('success', 'Berhasil Menambahkan Data Penyedia Baru!');
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
        $penyedia = Penyedia::all()->where('id', $id);
        $user = User::get()->all();
        return view('admin.penyedia.edit', compact ('penyedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $penyedia = Penyedia::findOrFail($id);

        $penyedia->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
        ]);
    

        // Redirect ke halaman admin/penyedia setelah selesai
        return redirect('admin/penyedia/index')->with('success', 'Berhasil Menambahkan Data Penyedia Baru!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('penyedia')->where('id',$id)->delete();
        return redirect('admin/penyedia/index')->with('success', 'User Berhasil Dihapus!');;
    }
}
