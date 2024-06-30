<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Pelanggan;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function booking($id)
    {
        $layanan = Layanan::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['harga'] += $layanan->harga;
        } else {
            $cart[$id] = [
                "nama" => $layanan->nama,
                "deskripsi" => $layanan->deskripsi,
                "harga" => $layanan->harga,
                "foto" => $layanan->foto
            ];
        }

        session()->put('cart', $cart);
        return redirect('landingpage/booking')->with('success', 'Product added to cart successfully!');
    }

    public function pesan(Request $request,$layanan)
    {
        
        $layanan = Layanan::where('nama',$layanan)->first();
        $pelanggan = Pelanggan::where('user_id', auth()->user()->id)->pluck('id')[0];
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $total,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->username,
            ),

        );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('landingpage.booking', compact('layanan', 'snapToken'));
    }
}
