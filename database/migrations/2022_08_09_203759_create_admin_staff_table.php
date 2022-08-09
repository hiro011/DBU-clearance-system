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
        Schema::create('admin_staff', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50)->unique();
            $table->string('name', 50);
            $table->string('gender', 50);
            $table->string('college', 100);
            $table->string('department', 100)->nullable();
            $table->string('status', 50);
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
        Schema::dropIfExists('admin_staff');
    }
};
