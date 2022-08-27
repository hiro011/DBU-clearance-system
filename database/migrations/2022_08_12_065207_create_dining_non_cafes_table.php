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
        Schema::create('dining_non_cafes', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('name', 50);
            $table->string('gender', 50);
            $table->integer('year');
            $table->string('college', 100);
            $table->string('department', 100);
            $table->float('Birr_monthly')->nullable();
            $table->string('add_by', 250);
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
        Schema::dropIfExists('dining_non_cafes');
    }
};
