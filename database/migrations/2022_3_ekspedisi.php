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
        Schema::create('ekspedisi', function (Blueprint $table) {
            $table->id();
            //$table->increments('idEkspedisi');
            $table->string('namaEkspedisi',50);
        });

        DB::table('ekspedisi')->insert([
            ['namaEkspedisi' => 'JNE'],
            ['namaEkspedisi' => 'JnT'],
            ['namaEkspedisi' => 'SiCepat'],
            ['namaEkspedisi' => 'AnterAja'],
            ['namaEkspedisi' => 'Ninja Xpress'],
            ['namaEkspedisi' => 'ID Express'],
            ['namaEkspedisi' => 'Lion Parcel'],
            ['namaEkspedisi' => 'Pos Indonesia'],
            ['namaEkspedisi' => 'Wahana'],
            ['namaEkspedisi' => 'TIKI']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ekspedisi');
    }
};
