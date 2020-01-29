<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesChapcustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        
        Schema::create('chapcustomers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        /*
        Schema::create('chapcustomers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapcustomers');
    }
}
