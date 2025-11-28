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
            $table->unsignedBigInteger('report_component_id')->nullable()->after('component_id');

            $table->foreign('report_component_id')->references('id')->on('report_components')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('component_entities', function (Blueprint $table) {
            $table->dropForeign(['report_component_id']);
            $table->dropColumn('report_component_id');
        });
    }
};
