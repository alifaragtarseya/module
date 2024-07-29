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
        Schema::create('partener_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('partener_id')->constrained('parteners')->cascadeOnDelete();
            $table->string('locale')->index();
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
        Schema::table('partener_translations', function (Blueprint $table) {
            //
        });
    }
};
