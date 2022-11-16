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
        Schema::create('stdnt_data', function (Blueprint $table) {
            $table->id();
            $table->string('stdnt_name');
            $table->string('stdnt_dept')->nullable();
            $table->string('stdnt_sem')->nullable();
            $table->string('stdnt_sec')->nullable();
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
        Schema::dropIfExists('stdnt_data');
    }
};
