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
        Schema::create('home_page_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('slide');
            $table->integer('status')->define('1')->comment('1=Actice,2=Inactive');
            $table->integer('sequence');
            $table->longText('link')->nullable();
            $table->longText('link_text')->nullable();
            $table->longText('description')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('home_page_sliders');
    }
};
