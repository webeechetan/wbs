<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->unsignedBigInteger('cat_id');
            $table->longText('description');
            $table->longText('short_description');
            $table->string('meta_title');
            $table->longText('meta_description');
            $table->string('thumbnail');
            $table->string('banner');
            $table->string('og_title')->nullable();
            $table->string('og_image')->nullable();
            $table->longText('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
