<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jabatan',['pendeta','sintua']);
            $table->string('photo');
            $table->date('date');
            $table->timestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('pelayan');
    }
}
