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
        Schema::create('property_users', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('name', 100);
            $table->string('gender', 100);
            $table->string('phone_no', 100);
            $table->string('college', 100);
            $table->string('department', 100)->nullable();
            $table->string('add_by', 100)->nullable();
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
        Schema::dropIfExists('property_users');
    }
};
