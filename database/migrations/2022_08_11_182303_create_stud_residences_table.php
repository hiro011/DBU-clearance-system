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
        Schema::create('stud_residences', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('block', 100);
            $table->string('dorm', 50);
            $table->integer('bed')->nullable();
            $table->integer('matterss')->nullable();
            $table->integer('pillow')->nullable();
            $table->integer('table')->nullable();
            $table->integer('chairs')->nullable();
            $table->integer('key')->nullable();
            $table->string('status', 50);
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
        Schema::dropIfExists('stud_residences');
    }
};
