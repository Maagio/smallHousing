<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('houses', function (Blueprint $table) {
            $table->increments("id");
            $table->double("price");
            $table->string("address");
            $table->string("description");
            $table->unsignedBigInteger("userId");
            $table->foreign("userId")->references("id")->on("users");
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('houses');
        Schema::enableForeignKeyConstraints();
    }
}
