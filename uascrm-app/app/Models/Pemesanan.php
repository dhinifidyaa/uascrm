<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

        
        protected $table = 'pemesanan';
        
        protected $fillable = [
            'waktu_pemesanan', 'status', 'harga_akhir', 'layanan_id', 'pelanggan_id', 'penyedia_id'
        ];
        public $timestamps = false;
    
        public function pelanggan(){
            return $this->belongsTo(Pelanggan::class);
        }
        public function layanan(){
            return $this->belongsTo(Layanan::class);
        }
        public function penyedia(){
            return $this->belongsTo(Penyedia::class);
        }
    }
