<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("dsrid");
            $table->date("date");
            $table->string('name');
            $table->string('phone');

            $table->string('route');
            $table->string("gname");
            $table->string('pname');
            $table->string('quantity');
            $table->string('quantity1');

            $table->string("unit");
            $table->string("return");
            $table->string("returnam");
            $table->string('price');
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
        Schema::dropIfExists('workdetails');
    }
}
