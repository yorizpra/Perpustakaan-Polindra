<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;
    protected $table        = 'people';
    protected $primaryKey   = 'id_user';
    protected $fillable     = ['id_user', 'nama', 'jenis_kelamin', 'no_telepon', 'alamat', 'username', 'password'];

    public function peminjaman(){
        return $this->belosngsTo('App/Peminjaman');
    }
}
