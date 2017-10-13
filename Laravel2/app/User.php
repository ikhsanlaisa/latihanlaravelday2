<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;



//    $role = Role::create(['name' => 'writer']);
//    $permission = Permission::create(['name' => 'edit articles']);

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_saldo(){
        return $this->hasMany('App\Saldo', 'id');
    }

    public function user_transaksi(){
        return $this->hasMany('App\transaksi');
    }
}
