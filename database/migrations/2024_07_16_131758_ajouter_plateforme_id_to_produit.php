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
        Schema::table('produit', function (Blueprint $table) {
            $table->foreignId('plateforme_id')->references('id')->on('plateforme');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produit', function (Blueprint $table) {
            $table->dropForeign(['plateforme_id']);
            $table->dropColumn('plateforme_id');
        });
    }
};
