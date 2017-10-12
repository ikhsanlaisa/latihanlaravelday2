<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homestay extends Model
{
    protected $table = 'homestays';
    protected $fillable = array('id', 'nama', 'alamat', 'no_telp', 'deskrpsi', 'harga', 'status');

    public function homestay_transaksi(){
        return $this->belongsTo('App\transaksi');
    }
}
