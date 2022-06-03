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
        Schema::create('our_works', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cat_id');
            $table->longText('description')->nullable();
            $table->longText('heading')->nullable();
            $table->longText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('images')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_image')->nullable();
            $table->longText('slug');
            $table->timestamp('publish_at')->useCurrent();
            $table->longText('gallery_images')->nullable();
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
        Schema::dropIfExists('our_works');
    }
};
