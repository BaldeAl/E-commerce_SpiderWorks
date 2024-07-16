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
        Schema::table('detail_panier', function (Blueprint $table) {
            $table->foreignId('panier_id')->references('id')->on('panier');
            $table->foreignId('produit_id')->references('id')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_panier', function (Blueprint $table) {
            $table->dropForeign(['panier_id']);
            $table->dropColumn('panier_id');
            $table->dropForeign(['produit_id']);
            $table->dropColumn('produit_id');
        });
    }
};
