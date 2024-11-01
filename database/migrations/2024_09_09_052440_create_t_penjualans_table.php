<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_penjualans', function (Blueprint $table) {
            $table->bigIncrements('penjualan_id');
            $table->unsignedBigInteger('user_id'); // Use unsignedBigInteger
            $table->string('pembeli', 50);
            $table->string('penjualan_kode', 20);
            $table->dateTime('penjualan_tanggal');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('m_users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_penjualans');
    }
};
