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
        Schema::create('component_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entity_id');
            $table->unsignedBigInteger('attribute_id');
            $table->text('value_string')->nullable();
            $table->decimal('value_number', 10, 2)->nullable();
            $table->date('value_date')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('entity_id')->references('id')->on('component_entities')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('component_attributes')->onDelete('cascade');
            $table->unique(['entity_id', 'attribute_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('component_values');
    }
};
