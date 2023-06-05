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
        //php artisan migrate --pretend ---sql dekhr jnno
        //php artisan migrate:reset table delete korar jnno
        //pakeage  composer require doctrine/dbal
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->longText('description');
            $table->text('excerpt')->comment('summery of post');
            $table->boolean('is_published')->default(false);
            $table->integer('min_to_read')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
