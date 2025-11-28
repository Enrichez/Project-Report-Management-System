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
        Schema::create('component_entities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('component_id');
            $table->string('name');
            $table->string('label');
            $table->string('type');
            $table->text('value')->nullable();
            $table->softDeletes();
            $table->timestamps();

            
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');
            $table->unique(['component_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('component_entities');
    }
};
