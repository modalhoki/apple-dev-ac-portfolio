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
        Schema::create('typebarang', function (Blueprint $table) {
            $table->id();
            $table->string('namaType',25);
        });

        DB::table('typebarang')->insert([
            ['namaType' => 'Lunak'],
            ['namaType' => 'Mudah Pecah'],
            ['namaType' => 'Keras'],
            ['namaType' => 'Lainnya']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
