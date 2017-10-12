<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $table = 'saldos';
    protected $fillable = array('id', 'user_id', 'tipe_transaksi', 'total');

    public function saldo_user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
