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
        Schema::create('comic', function (Blueprint $table) {
            $table->id();
            $table->string('title', 40);
            $table->text('description');
            $table->text('thumb');
            $table->string('price', 30);
            $table->string('series', 40);
            $table->date('sale_date');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comic');
    }
};
