<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksis';
    protected $fillable = array('id', 'user_id', 'homestay_id', 'status', 'tanggal_masuk', 'tanggal_keluar');

    public function transaksi_user(){
        return $this->belongsTo('App\User');
    }

    public function transaksi_homestay(){
        return $this->belongsTo('App\homestay');
    }
}
