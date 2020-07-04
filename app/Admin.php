<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;
    protected $table        = 'admins';
    protected $primaryKey   = 'id_admin';
    protected $fillable     = ['id_admin', 'nama', 'jenis_kelamin', 'no_telepon', 'alamat', 'username', 'password'];

    public function peminjaman(){
        return $this->belosngsTo('App/Peminjaman');
    }
}
