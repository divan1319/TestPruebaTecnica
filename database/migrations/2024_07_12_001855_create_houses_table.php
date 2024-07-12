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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('senda_id')->nullable()->constrained('sendas','id');
            $table->foreignId('poligono_id')->nullable()->constrained('poligonos','id');
            $table->decimal('quota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
