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
        Schema::create('framework_project', function (Blueprint $table) {
            $table->unsignedBigInteger('framework_id');
            $table->unsignedBigInteger('project_id');
            $table->foreign('framework_id')->references('id')->on('frameworks')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('framework_project');
    }
};
