<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pantai');
            $table->string('lokasi_pantai');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('komen');
            $table->string('image');
            $table->string('video');
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
        Schema::dropIfExists('pantais');
    }
};
