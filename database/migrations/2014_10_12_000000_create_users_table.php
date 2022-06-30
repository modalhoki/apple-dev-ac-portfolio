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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('noHp',15)->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('sebagai',25)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['name' => 'Pelanggan Satu', 'email' => 'customer1@email.com', 'password' => '$2y$10$lYfH6YTcwRGmNR5QKrDOEu0GONv02YZ8kmFfw2iv8ZwmR5v9yNHD.', 'sebagai' => 'Customer'],
            ['name' => 'Kurir Satu', 'email' => 'courrier1@email.com', 'password' => '$2y$10$lYfH6YTcwRGmNR5QKrDOEu0GONv02YZ8kmFfw2iv8ZwmR5v9yNHD.', 'sebagai' => 'Courrier'],
            ['name' => 'Ariasatya Mahatma', 'email' => 'aria.satyamahatma@gmail.com', 'password' => '$2y$10$lYfH6YTcwRGmNR5QKrDOEu0GONv02YZ8kmFfw2iv8ZwmR5v9yNHD.', 'sebagai' => 'Administrator']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
