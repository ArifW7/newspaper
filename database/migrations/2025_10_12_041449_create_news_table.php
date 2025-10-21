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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('video_url')->nullable();
            $table->string('priority')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->enum('status', ['temp', 'active', 'inactive'])->default('temp');
            $table->timestamp('published_at')->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->string('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->text('seo_keyword')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
