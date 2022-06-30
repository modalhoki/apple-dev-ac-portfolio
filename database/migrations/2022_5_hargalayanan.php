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
        Schema::create('hargalayanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('harga');
            $table->foreignId('idEkspedisi')->constrained('ekspedisi');
            $table->foreignId('idLayanan')->constrained('layanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hargalayanan');
    }
};
