<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

        
        protected $table = 'diskon';
        protected $fillable = [
            'kode_diskon', 'deskripsi', 'persentase_diskon'
        ];
        public $timestamps = false;
        
        public function pelanggan(){
            return $this->belongsTo(Pelanggan::class);           
        }
}
