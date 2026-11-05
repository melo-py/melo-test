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
Schema::create('bloc_vaccin', function (Blueprint $table) {
    $table->unsignedBigInteger('bloc_id');
    $table->unsignedBigInteger('vaccin_id');

    $table->foreign('bloc_id')
          ->references('id_bloc')
          ->on('blocs')
          ->cascadeOnDelete();

    $table->foreign('vaccin_id')
          ->references('id_vaccin')
          ->on('vaccins')
          ->cascadeOnDelete();

    $table->primary(['bloc_id', 'vaccin_id']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloc_vaccin');
    }
};
