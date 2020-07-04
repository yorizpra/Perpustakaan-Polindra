<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nama', 50);
            $table->string('jenis_kelamin', 10);
            $table->string('no_telepon', 15);
            $table->string('alamat', 100);
            $table->string('username');
            $table->string('password');
            // $table->boolean('is_mahasiswa')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
