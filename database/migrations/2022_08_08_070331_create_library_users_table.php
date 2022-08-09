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
        Schema::create('library_users', function (Blueprint $table) {
            $table->id();
            $table->string('Card_no', 50);
            $table->string('name', 100);
            $table->string('gender', 50);
            $table->string('catagory', 100);
            $table->string('college', 100);
            $table->string('department', 100)->nullable();
            $table->string('email', 255)->nullable();
            $table->integer('phone')->nullable();
            $table->string('add_by', 50);
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
        Schema::dropIfExists('library_users');
    }
};
