<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('datajemaats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('namakeluarga');
            $table->string('sektor');
            $table->string('alamat');

            
        });

    }

    public function down()
    {
        
        Schema::dropIfExists('datajemaats');
    }
};
