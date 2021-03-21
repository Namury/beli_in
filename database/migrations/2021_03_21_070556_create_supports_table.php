<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supporter');
            $table->foreignId('supported');
            $table->foreignId('item_id')->constrained();
            $table->integer('amount');
            $table->float('total_price');
            $table->timestamps();

            $table->foreign('supporter')->references('id')->on('users');
            $table->foreign('supported')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supports');
    }
}
