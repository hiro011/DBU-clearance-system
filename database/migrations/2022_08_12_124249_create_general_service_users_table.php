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
        Schema::create('general_service_users', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('name', 100);
            $table->string('college', 100);
            $table->string('block_no', 50);
            $table->string('floor_no', 50);
            $table->string('room_no', 50);
            $table->string('Water_bill_no', 255)->nullable();
            $table->string('marriage', 100);
            $table->integer('phone');
            $table->string('area', 100);
            $table->string('status', 100);
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
        Schema::dropIfExists('general_service_users');
    }
};
