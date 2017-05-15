<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compact_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lotnumber');
            $table->float('useLDPE')->nullable();
            $table->float('useLLDPE')->nullable();
            $table->float('useHDPE')->nullable();
            $table->float('useReuse')->nullable();
            $table->float('Ca');
            $table->float('total');
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
        Schema::drop('compact_details');
    }
}
