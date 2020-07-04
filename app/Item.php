<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $table        = 'items';
    protected $primaryKey   = 'id_buku';
    protected $fillable     = ['id_buku', 'judul', 'jenis_buku', 'pengarang', 'penerbit', 'tahun_terbit', 'jumlah_buku', 'deskripsi'];

    public function peminjaman(){
        return $this->belosngsTo('App/Peminjaman');
    }
}
