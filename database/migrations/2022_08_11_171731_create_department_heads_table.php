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
        Schema::create('department_heads', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('department', 100);
            $table->string('catagory', 250);
            $table->string('item1', 250);
            $table->string('item2', 250)->nullable();
            $table->string('item3', 250)->nullable();
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
        Schema::dropIfExists('department_heads');
    }
};
