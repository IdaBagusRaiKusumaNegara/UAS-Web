<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Customer', 100);
            $table->bigInteger('Unit_Kerja_Id');
            $table->enum('Kategori_Pekerjaan', ['Software', 'Hardware', 'Jaringan']);
            $table->text('Deskripsi_Pekerjaan');
            $table->enum('Pekerja', ['Orang1', 'Orang2', 'Orang3', 'Orang4']);
            $table->enum('Status_Pekerjaan', ['Pending', 'Process', 'Completed']);
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
        Schema::dropIfExists('pekerjaans');
    }
}