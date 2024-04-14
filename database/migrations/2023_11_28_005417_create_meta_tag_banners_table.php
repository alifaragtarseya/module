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
        Schema::create('meta_tag_banners', function (Blueprint $table) {
            $table->id();
            $table->string('page')->comment('this column will be enum');
            $table->string('title');
            $table->string('title_en');
            $table->text('keywords');
            $table->text('description');
            $table->text('description_en');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('meta_tag_banners');
    }
};
