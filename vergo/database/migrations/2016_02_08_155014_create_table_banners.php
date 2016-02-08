<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("banners", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("href");
            $table->tinyInteger("position")->default(0);
            $table->string("cover");
            $table->timestamps();
            $table->tinyInteger("status")->default(0); //0 -unpublished, 1 - published, 2 - hidden
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('banners');
    }
}
