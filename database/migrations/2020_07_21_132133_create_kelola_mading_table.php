<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelolaMadingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelola_madings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('kelola_kategori_id');
            $table->foreign('kelola_kategori_id')->references('id')->on('kelola_kategori')->onDelete('cascade');
            $table->text('gambar');
            $table->string('deskripsi');
            $table->enum('status', [1,2,3]); // 1=pending, 2=revisi, 3=tolak
            $table->softDeletes();
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
        Schema::dropIfExists('kelola_mading');
    }
}
