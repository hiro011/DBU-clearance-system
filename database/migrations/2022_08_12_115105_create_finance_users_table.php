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
        Schema::create('finance_users', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('name', 100);
            $table->string('college', 100);
            $table->string('department', 100);
            $table->float('deposit');
            $table->float('withdraw');
            $table->float('balance');
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
        Schema::dropIfExists('finance_users');
    }
};
