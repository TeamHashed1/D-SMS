<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dworks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date("date");
            $table->string('name');
            $table->string('route');
            $table->string('phone');
            $table->string('dsrid');
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
        Schema::dropIfExists('dworks');
    }
}
