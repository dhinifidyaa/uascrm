<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $fillable = [
        'nama', 'alamat', 'no_tlp', 'user_id', 'diskon_id'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);           
    }
    public function diskon(){
        return $this->belongsTo(Diskon::class);           
    }
}
