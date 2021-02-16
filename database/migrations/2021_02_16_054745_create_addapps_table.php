<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addapps', function (Blueprint $table) {
            $table->id();
            $table->string('appsName');
            $table->string('appsLink');
            $table->string('appsDesc');
            $table->string('ss1');
            $table->string('ss2');
            $table->string('status');
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
        Schema::dropIfExists('addapps');
    }
}
