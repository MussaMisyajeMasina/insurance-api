<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('policy_id')->unsigned()->index();
            $table->foreign('policy_id')->references('id')->on('policies')->onDelete('cascade');
            $table->date('MakeYear');
            $table->string('color');
            $table->char('NumberPlate');
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
        Schema::dropIfExists('vehicles');
    }
}
