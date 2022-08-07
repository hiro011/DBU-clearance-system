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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('name', 100);
            $table->string('gender', 50);
            $table->date('birth_date');
            $table->string('employee_type', 50);
            $table->string('guarentor_name', 50)->nullable();
            $table->integer('guarentor_phone')->nullable();
            $table->text('level_of_education')->nullable();
            $table->text('jop_title')->nullable();
            $table->integer('age');
            $table->float('salary');
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
        Schema::dropIfExists('employees');
    }
};
