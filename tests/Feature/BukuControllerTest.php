<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Item;

class BukuControllerTest extends TestCase
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
        $buku = Item::create([
                'judul' => 'Cara Budidaya Ikan',
                'jenis_buku' => "Makalah",
                'pengarang' => 'agoy',
                'penerbit' => 'PT Erlangga',
                'tahun_terbit' => 2020,
                'jumlah_buku' => 50,
                'deskripsi' => 'Cara membudidayakan ikan dengan baik dan benar'
            ]);

            $this->assertDatabaseHas('items', [
                'judul' => 'Cara Budidaya Ikan',
                'jenis_buku' => "Makalah",
                'pengarang' => 'agoy',
                'penerbit' => 'PT Erlangga',
                'tahun_terbit' => 2020,
                'jumlah_buku' => 50,
                'deskripsi' => 'Cara membudidayakan ikan dengan baik dan benar'
        ]);	
    }

    public function test_destroy(){
        $buku = Item::destroy(7);
        $this->assertDatabaseMissing('items',[
            'id' => 7
        ]);
    }

    public function test_update(){
        $buku = Item::create([
                'judul' => 'Cara Budidaya ikan',
                'jenis_buku' => "Makalah",
                'pengarang' => 'agoy',
                'penerbit' => 'PT Erlangga',
                'tahun_terbit' => 2020,
                'jumlah_buku' => 50,
                'deskripsi' => 'Cara membudidayakan ikan dengan baik dan benar'
        ]);

        $buku = Item::find(1);
        $buku->judul = 'Baswedan';  
        $buku->jenis_buku = 'Novel';  
        $buku->pengarang = 'Yogz';  
        $buku->penerbit = 'Kainoe Books';
        $buku->tahun_terbit = 2021;
        $buku->jumlah_buku = 501;
        $buku->deskripsi = 'Cerita tentang seseorang yang sengaja bangun subuh-suubuh untuk menyiram airkeras pada orang yang habis sholat subuh secara tidak sengaja';
        $buku->save();

        $this->assertDatabaseHas('items', [
                'judul' => 'Baswedan',
                'jenis_buku' => 'Novel',
                'pengarang' => 'Yogz',
                'penerbit' => 'Kainoe Books',
                'tahun_terbit' => 2021,
                'jumlah_buku' => 501,
                'deskripsi' => 'Cerita tentang seseorang yang sengaja bangun subuh-suubuh untuk menyiram airkeras pada orang yang habis sholat subuh secara tidak sengaja'
        ]);	
    }
}