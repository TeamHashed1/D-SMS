<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inexes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dsrid');
            $table->string('date');
            $table->string('route');
            $table->string('type');
            $table->string('purpase');

            $table->string('amount');
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
        Schema::dropIfExists('inexes');
    }
}
