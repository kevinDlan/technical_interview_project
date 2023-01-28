<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importations', function (Blueprint $table) 
        {
            $table->id();
            $table->string("matricule");
            $table->string("firstname")->nullable();
            $table->string("lastname");
            $table->string("address");
            $table->string("second_address")->nullable();
            $table->string("postal_code")->nullable();
            $table->string("city");
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
        Schema::dropIfExists('importations');
    }
};
