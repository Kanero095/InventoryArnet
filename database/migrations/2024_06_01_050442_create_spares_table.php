<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('spares', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('namaperangkat');
            $table->string('jenismodul');
            $table->string('namamodul');
            $table->string('tipe');
            $table->string('nomorseri');
            $table->string('lokasipenyimpanan');
            $table->string('tanggalpenyimpanan');
            $table->integer('jumlah');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spares');
    }
};
