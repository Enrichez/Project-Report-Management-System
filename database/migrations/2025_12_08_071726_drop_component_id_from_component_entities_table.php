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
        Schema::table('component_entities', function (Blueprint $table) {
            $table->dropForeign(['component_id']);
            $table->dropUnique(['component_id', 'name']);
            $table->dropColumn('component_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('component_entities', function (Blueprint $table) {
            $table->unsignedBigInteger('component_id')->after('id');
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');
            $table->unique(['component_id', 'name']);
        });
    }
};
