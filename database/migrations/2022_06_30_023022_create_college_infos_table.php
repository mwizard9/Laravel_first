<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('faculty');
            $table->string('batch_id');
            $table->string('semester_id');
            $table->string('tu_reg.no');
            $table->string('symbol.no');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_infos');
    }
}
