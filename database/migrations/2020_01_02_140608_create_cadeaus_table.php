<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadeausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadeaus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('descriptionCadeaux');
            $table->dateTime('dateCadeaux');
            $table->string('lien');
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
        Schema::dropIfExists('cadeaus');
    }
}