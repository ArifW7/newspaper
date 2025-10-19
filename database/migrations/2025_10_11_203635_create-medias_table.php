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
        Schema::create('medias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('src_id')->nullable();
            $table->tinyInteger('src_type')->default(0)->comment('0=media, 1=news, 2=category, 3=Users, 4=General');
            $table->tinyInteger('use_Of_file')->default(0)->comment('0=media, 1=image, 2=banner, 3=gallery, 4=icon');
            $table->string('file_name', 255)->nullable();
            $table->string('alt_text', 255)->nullable();
            $table->string('caption', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('file_url', 191)->nullable();
            $table->string('file_size', 100)->nullable();
            $table->integer('file_type')->default(0)->comment('0=unknown, 1=image, 2=pdf');
            $table->integer('drag')->default(0);
            $table->bigInteger('addedby_id')->nullable();
            $table->bigInteger('editedby_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
