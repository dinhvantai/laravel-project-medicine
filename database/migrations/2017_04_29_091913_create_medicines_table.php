<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('symptom',255)->nullable();
            $table->mediumText('short_describer')->nullable();
            $table->text('detail');
            $table->integer('user_id')->unsigned();
            $table->float('avg_rate')->default(0);
            $table->integer('total_rate')->default(0);
            $table->string('related_medicine')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
