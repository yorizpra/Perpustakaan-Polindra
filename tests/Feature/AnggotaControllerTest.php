<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Person;

class AnggotaControllerTest extends TestCase
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
        $anggota = Person::create([
                'nama' => 'Yuri Gagarin',
                'jenis_kelamin' => "Laki-laki",
                'no_telepon' => '021647364857',
                'alamat' => 'Moscow',
                'username' => 'gagarin123',
                'password' => 'gagarin123'  
            ]);

            $this->assertDatabaseHas('people', [
                'nama' => 'Yuri Gagarin',
                'jenis_kelamin' => "Laki-laki",
                'no_telepon' => '021647364857',
                'alamat' => 'Moscow',
                'username' => 'gagarin123',
                'password' => 'gagarin123'
        ]);	
    }

    public function test_destroy(){
        $anggota = Person::destroy(1);
        $this->assertDatabaseMissing('people',[
            'id' => 1
        ]);
    }

    public function test_update(){
        $anggota = Person::create([
                'nama' => 'Yuri Gagarin',
                'jenis_kelamin' => "Laki-laki",
                'no_telepon' => '021647364857',
                'alamat' => 'Moscow',
                'username' => 'gagarin123',
                'password' => 'gagarin123'
        ]);

        $anggota = Person::find(1);
        $anggota->nama = 'Neil Armstrong';  
        $anggota->jenis_kelamin = 'Laki-laki';  
        $anggota->no_telepon = '021749538958';  
        $anggota->alamat = 'Ohio';
        $anggota->username = 'armstrong123';
        $anggota->password = 'armstrong123';
        $anggota->save();

        $this->assertDatabaseHas('people', [
                'nama' => 'Neil Armstrong',
                'jenis_kelamin' => "Laki-laki",
                'no_telepon' => '021749538958',
                'alamat' => 'Ohio',
                'username' => 'armstrong123',
                'password' => 'armstrong123'
        ]);	
    }
}