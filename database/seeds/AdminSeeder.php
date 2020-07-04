<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::insert([
            [
              'id_admin'  			=> 1,
              'nama' 			    => 'Admin',
              'jenis_kelamin'	    => 'Laki-laki',
              'no_telepon'	    	=> '085659637488',
              'alamat'				=> 'Indramayu',
              'username'			=> 'admin',
              'password'			=> bcrypt('admin'),
              'created_at'          => \Carbon\Carbon::now(),
              'updated_at'          => \Carbon\Carbon::now()
            ],
        ]);
    }
}
