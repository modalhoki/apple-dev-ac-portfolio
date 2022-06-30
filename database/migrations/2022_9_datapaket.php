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
        Schema::create('datapaket', function (Blueprint $table) {
            $table->id();
            $table->string('namaPenerima',50);
            $table->string('alamatPengiriman',50);
            $table->string('namaBarang',50);
            $table->string('materialBarang',50);
            $table->string('noPenerima',15);
            $table->string('status',25)->nullable();
            $table->string('noResi',20)->nullable();
            //$table->string('idTypeBarang',50);
            //$table->string('idBahanPengemasan',50);
            $table->foreignId('idHarga')->constrained('hargalayanan')->nullable();
            $table->foreignId('idTrackingPembayaran')->constrained('trackingpembayaran')->nullable();
            $table->foreignId('idUsers')->constrained('users');
            $table->foreignId('idTypeBarang')->constrained('typebarang');
            $table->foreignId('idBahanPengemasan')->constrained('bahanpengemasan');
            //$table->unsignedBigInteger('idHarga')->nullable();
            //$table->unsignedBigInteger('idTrackingPembayaran')->nullable();
            //$table->unsignedBigInteger('idUsers')->nullable();
            //$table->unsignedBigInteger('idTypeBarang');
            //$table->unsignedBigInteger('idBahanPengemasan');
            //$table->foreign('idHarga')->references('id')->on('hargalayanan');
            //$table->foreign('idTrackingPembayaran')->references('id')->on('trackingpembayaran');
            //$table->foreign('idUsers')->references('id')->on('users');
            //$table->foreign('idTypeBarang')->references('id')->on('typebarang');
            //$table->foreign('idBahanPengemasan')->references('id')->on('bahanpengemasan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapaket');
    }
};
