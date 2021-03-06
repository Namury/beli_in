<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_type_id')->nullable()->default(null)->constrained();
            $table->foreignId('user_role_id')->default(1)->constrained();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->text('description')->nullable()->default(NULL);
            $table->string('page_name')->nullable()->default(null);
            $table->string('page_slug')->nullable()->default(null);
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
        Schema::dropIfExists('users');
    }
}
