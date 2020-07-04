<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowItemMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_item_mhs', function (Blueprint $table) {
            $table->increments('id_peminjaman');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('people')->onDelete('cascade');
            $table->integer('id_buku')->unsigned();
            $table->foreign('id_buku')->references('id_buku')->on('items')->onDelete('cascade');
            $table->string('jumlah_pinjam');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->enum('status', ['pinjam', 'kembali']);
            $table->text('ket')->nullable();
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
        Schema::dropIfExists('borrow_item_mhs');
    }
}