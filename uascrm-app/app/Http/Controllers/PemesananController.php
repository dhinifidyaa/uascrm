<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Layanan;
use App\Models\Pelanggan;
use App\Models\Penyedia;
use DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pemesanan = Pemesanan::get()->all();
        $layanan = Layanan::get()->all();
        $pelanggan = Pelanggan::get()->all();
        $penyedia = Penyedia::get()->all();
        return view('admin.pemesanan.index', compact('pemesanan','pelanggan','layanan','penyedia' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pemesanan = Pemesanan::get()->all();
        $layanan = Layanan::get()->all();
        $pelanggan = Pelanggan::get()->all();
        $penyedia = Penyedia::get()->all();
        return view('admin.pemesanan.create', compact('pemesanan','pelanggan','layanan','penyedia' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pelanggan = Pelanggan::with('diskon')->findOrFail($request->input('pelanggan_id'));
        $layanan = Layanan::get()->all();
        $penyedia = Penyedia::get()->all();
        $diskon = 0;
        if($pelanggan->diskon && $pelanggan->diskon->kode_diskon=='DISC 1'){
            $diskon=10000;
        } elseif($pelanggan->diskon->kode_diskon=='DISC 2'){
            $diskon = 5000;
        }
        DB::table('pemesanan')->insert([
            'waktu_pemesanan' => $request->input('waktu_pemesanan'),
            'status' => 'proses',
            'harga_akhir' => $request->input('harga_akhir') - $diskon,
            'layanan_id' => $request->input('layanan_id'),
            'pelanggan_id' => $request->input('pelanggan_id'),
            'penyedia_id' => $request->input('penyedia_id'),
        ]);

        return redirect('admin/pemesanan/index')->with('success', 'Berhasil Menambahkan Pemesanan Baru!');
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
        $pemesanan = Pemesanan::all()->where('id', $id);
        $layanan = Layanan::get()->all();
        $pelanggan = Pelanggan::get()->all();
        $penyedia = Penyedia::get()->all();
        return view('admin.pemesanan.edit', compact('pemesanan','pelanggan','layanan','penyedia' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pemesanan = Pemesanan::findOrFail($id);

        $pelanggan = Pelanggan::with('diskon')->findOrFail($request->input('pelanggan_id'));
        $layanan = Layanan::get()->all();
        $penyedia = Penyedia::get()->all();
        $diskon = 0;
        if($pelanggan->diskon && $pelanggan->diskon->kode_diskon=='DISC 1'){
            $diskon=10000;
        } elseif($pelanggan->diskon->kode_diskon=='DISC 2'){
            $diskon = 5000;
        }
        DB::table('pemesanan')->insert([
            'waktu_pemesanan' => $request->input('waktu_pemesanan'),
            'status' => 'proses',
            'harga_akhir' => $request->input('harga_akhir') - $diskon,
            'layanan_id' => $request->input('layanan_id'),
            'pelanggan_id' => $request->input('pelanggan_id'),
            'penyedia_id' => $request->input('penyedia_id'),
        ]);

        return redirect('admin/pemesanan/index')->with('success', 'Berhasil Menambahkan Pemesanan Baru!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('pemesanan')->where('id',$id)->delete();
        return redirect('admin/pemesanan/index')->with('success', 'User Berhasil Dihapus!');;
    }
}
