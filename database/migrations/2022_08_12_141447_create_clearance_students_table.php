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
        Schema::create('clearance_students', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('name', 50);
            $table->string('gender', 50);
            $table->string('program', 50);
            $table->integer('year');
            $table->string('college', 100);
            $table->string('department', 100);
            $table->string('reason', 100);
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
        Schema::dropIfExists('clearance_students');
    }
};
