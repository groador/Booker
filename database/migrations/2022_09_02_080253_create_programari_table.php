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
        Schema::create('programari', function (Blueprint $table) {
            $table->id('');
            $table->integer('data_id')->unsigned();
            $table->foreign('id_cons')->references('id_cons')->on('consultant')->onDelete('cascade');
            $table->timestamps('zi');
            $table->timestamps('ora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programari');
    }
};
