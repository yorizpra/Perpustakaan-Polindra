<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pinjambarangmhs extends Model
{
    use SoftDeletes;
    protected $table        = 'borrow_item_mhs';
    protected $primaryKey   = 'id_peminjaman';
    protected $fillable     = ['id_peminjaman', 'id_user', 'id_buku', 'jumlah_pinjam', 'tgl_pinjam', 'tgl_kembali', 'status', 'ket'];

    
    public function room(){
        return $this->hasMany('App/Room', 'id_buku');
    }
    public function people(){
        return $this->hasMany('App/People', 'id_user');
    }
}