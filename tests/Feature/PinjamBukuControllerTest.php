<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Pinjambarangmhs;
use App\Person;
use App\Item;

class PinjamBukuControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
public function test_store(){
        $pinjam = Pinjambarangmhs::create([
                'id_user' => '8',
                'id_buku' => "1",
                'jumlah_pinjam' => '1',
                'tgl_pinjam' => '2020-06-10',
                'tgl_kembali' => '2020-06-11',
                'status' => 'pinjam',  
                'ket' => 'ingin membaca buku ini'  
            ]);

            $this->assertDatabaseHas('borrow_item_mhs', [
                'id_user' => '8',
                'id_buku' => "1",
                'jumlah_pinjam' => '1',
                'tgl_pinjam' => '2020-06-10',
                'tgl_kembali' => '2020-06-11',
                'status' => 'pinjam',
                'ket' => 'ingin membaca buku ini'
        ]);	
    }

    public function test_destroy(){
        $pinjam = Pinjambarangmhs::destroy(8);
        $this->assertDatabaseMissing('borrow_item_mhs',[
            'id' => 8
        ]);
    }

    public function test_update(){
        $pinjam = Pinjambarangmhs::create([
                'id_user' => '8',
                'id_buku' => "1",
                'jumlah_pinjam' => '1',
                'tgl_pinjam' => '2020-06-10',
                'tgl_kembali' => '2020-06-11',
                'status' => 'pinjam',
                'ket' => 'ingin membaca buku ini'
        ]);

        $pinjam = Pinjambarangmhs::find(1);
        $pinjam->id_user = '8';  
        $pinjam->id_buku = '1';  
        $pinjam->jumlah_pinjam = '1';  
        $pinjam->tgl_pinjam = '2020-06-10';
        $pinjam->tgl_kembali = '2020-06-11';
        $pinjam->status = 'kembali';
        $pinjam->ket = 'ingin membaca buku ini';
        $pinjam->save();

        $this->assertDatabaseHas('borrow_item_mhs', [
                'id_user' => '8',
                'id_buku' => "1",
                'jumlah_pinjam' => '1',
                'tgl_pinjam' => '2020-06-10',
                'tgl_kembali' => '2020-06-11',
                'status' => 'kembali',
                'ket' => 'ingin membaca buku ini'
        ]);	
    }
}