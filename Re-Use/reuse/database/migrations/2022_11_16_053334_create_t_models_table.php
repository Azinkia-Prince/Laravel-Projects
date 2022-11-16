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
        Schema::create('t_models', function (Blueprint $table) {
            $table->id();
            $table->integer('dept_name')->unsigned();
            $table->string('t_name')->nullable();
            $table->string('t_mail')->nullable();
            $table->string('t_num')->nullable();
            $table->string('t_img')->nullable();
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
        Schema::dropIfExists('t_models');
    }
};
