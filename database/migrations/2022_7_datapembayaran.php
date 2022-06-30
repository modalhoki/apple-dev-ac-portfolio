<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapembayaran', function (Blueprint $table) {
            $table->id();
            //$table->increments('idPembayaran');
            $table->string('nomorVA',50);
            $table->timestamp('generatedOn')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('paidOn', $precision = 0)->nullable();
            $table->string('status',50);
            $table->dateTime('expiredOn', $precision = 0);
            //$table->integer('idBank')->unsigned();
            $table->foreignId('idBank')->constrained('listbank');
            //$table->unsignedBigInteger('idBank');
            //$table->foreign('idBank')->references('id')->on('listBank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapembayaran');
    }
};
