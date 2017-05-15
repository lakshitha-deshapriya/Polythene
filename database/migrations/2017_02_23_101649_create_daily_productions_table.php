<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_productions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rollnumber');
            $table->string('size');
            $table->string('gauge')->nullable();
            $table->float('weight');
            $table->string('finishingtype')->nullable();
            $table->string('starttime');
            $table->string('endtime');
            $table->date('date');
            $table->text('comment')->nullable();
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
        Schema::drop('daily_productions');
    }
}
