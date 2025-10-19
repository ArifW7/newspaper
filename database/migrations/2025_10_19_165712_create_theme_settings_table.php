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
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('serial')->default(0);
            $table->integer('news_limit')->default(0);
            $table->integer('news_layout')->default(0);
            $table->integer('section_type')->default(0);
            $table->string('status')->default('active');
            $table->unsignedBigInteger('src_id')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->integer('drag')->default(0);
            $table->timestamps();

            $table->foreign('parent_id')
                ->references('id')
                ->on('theme_settings')
                ->onDelete('cascade');

            $table->index('src_id');
            $table->index('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theme_settings');
    }
};
