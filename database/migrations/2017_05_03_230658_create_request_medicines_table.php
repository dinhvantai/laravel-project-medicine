<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medicine_name');
            $table->mediumText('short_describer');
            $table->mediumText('respone_admin')->nullable();
            $table->integer('item_prescription_id')->unsigned();
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('item_prescription_id')->references('id')->on('item_prescriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_medicines');
    }
}
