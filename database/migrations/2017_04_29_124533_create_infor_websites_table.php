<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInforWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infor_websites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slogan')->nullable();
            $table->string('logo')->nullable();
            $table->mediumText('link_communications')->nullable();
            $table->text('footer')->nullable();
            $table->text('options')->nullable();
            $table->string('position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infor_websites');
    }
}
