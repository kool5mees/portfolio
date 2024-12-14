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
        Schema::create('aboutmecontents', function (Blueprint $table) {
            $table->id();
            $table->string("titel");
            $table->string("content", length: 1000);
            $table->string("img");
            $table->string("link1");
            $table->string("link2");
            $table->string("link3");
            $table->string("img1");
            $table->string("img2");
            $table->string("img3");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutmecontents');
    }
};
