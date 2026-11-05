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
        Schema::create('produits', function (Blueprint $table) {
            $table->id('id_produit');
            $table->string('label_produit', 128);
            $table->text('description_produit')->nullable();
            $table->string('type_produit', 100);
            $table->integer('quantite_produit');
            $table->decimal('prix_produit', 12, 2);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('bloc_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
