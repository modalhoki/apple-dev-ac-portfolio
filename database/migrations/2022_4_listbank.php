<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('listbank', function (Blueprint $table) {
            $table->id();
            //$table->increments('idBank');
            $table->string('namaBank',50);
        });
        
        DB::table('listbank')->insert([
            ['namaBank' => 'BCA'],
            ['namaBank' => 'Mandiri'],
            ['namaBank' => 'BNI'],
            ['namaBank' => 'BRI'],
            ['namaBank' => 'CIMB Niaga'],
            ['namaBank' => 'Jenius'],
            ['namaBank' => 'Jago']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listbank');
    }
};
