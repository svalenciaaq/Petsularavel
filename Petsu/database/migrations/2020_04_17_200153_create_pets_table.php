<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name','30')->required();
            $table->string('race','10')->required();
            $table->string('age','4')->required();
            $table->string('subject', '50')->required();
            $table->string('owner', '20')->required();
            $table->string('cellphone', '20')->required();
            $table->date('date', '30')->required();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pets');
    }
}
