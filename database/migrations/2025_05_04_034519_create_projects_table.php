<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('location')->nullable(); // Added for location
            $table->string('value')->nullable(); // Added for value (using string to accommodate format like "৳15.07 Crores")
            $table->string('monitoring_body')->nullable(); // Added for monitoring body
            $table->string('image')->nullable(); // Added for image path/filename
            $table->unsignedBigInteger('user_id'); //column type
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
            /* 
             * cascadeOnUpdate(): If a user's id were ever updated (uncommon, but possible), the corresponding user_id in the projects table would update automatically.
             * restrictOnDelete(): This prevents a user from being deleted if they still have projects associated with them. The database will throw an error if you try. This is often a good safety measure. */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
