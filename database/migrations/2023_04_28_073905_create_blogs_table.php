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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('slug');
            $table->string('description',5000);
            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('user_id')->references('id')->on('categories');
            // $table->foreign('last_updated_by')->references('name')->on('categories');
            $table->integer('category_id');
            $table->integer('user_id')->nullable();
            $table->integer('last_updated_by')->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onUpdate('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
