




<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalibadahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalibadahs', function (Blueprint $table) {
            $table->id();
            $table->string('namaibadah');
            $table->string('ayatalkitab');
            $table->date('haritanggal');
            $table->string('pelayan');
            $table->string('lokasiibadah');
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
        Schema::dropIfExists('jadwalibadahs');
    }
}
