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
        Schema::create('bahanpengemasan', function (Blueprint $table) {
            $table->id();
            // $table->increments('idRole');
            $table->string('namaPengemasan',25);
        });

        DB::table('bahanpengemasan')->insert([
            ['namaPengemasan' => 'Kertas'],
            ['namaPengemasan' => 'Plastik'],
            ['namaPengemasan' => 'Box'],
            ['namaPengemasan' => 'Kayu'],
            ['namaPengemasan' => 'Lainnya']
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
