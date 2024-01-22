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
        Schema::create('wallpaper', function (Blueprint $table) {
            $table->string('email');
            $table->foreign('email')->references('email')->on('users');
            $table->id()->unique();
            $table->string('imageAddress');
            $table->string('title');
            $table->string('description');
            $table->integer('totalViews');
            $table->integer('totalDownloads');
            $table->string('dimmension');
            $table->string('camera');
            $table->boolean('isFavourite') -> default(0)->change();
            $table->string('date');
            $table->string('tags');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallpaper');
    }
};
