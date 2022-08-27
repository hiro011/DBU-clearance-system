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
        Schema::create('property_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name', 255);
            $table->string('serial_no', 50)->nullable();
            $table->string('pin_no', 100)->nullable();
            $table->string('quantity', 100)->nullable();
            $table->string('unit_price', 100)->nullable();
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
        Schema::dropIfExists('property_items');
    }
};
