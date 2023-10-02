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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('img_path');
            $table->integer('all_points');
            $table->integer('donated_points')->default(0);
            $table->foreignId('package_id')->constrained('package_type');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
