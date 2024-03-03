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
        Schema::create('_evenement', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('titre');
            $table->text('description');
            $table->date('date');
            $table->string('lieu');
            $table->string('catégorie');
            $table->integer('nbPlace');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_evenement');
    }
};
