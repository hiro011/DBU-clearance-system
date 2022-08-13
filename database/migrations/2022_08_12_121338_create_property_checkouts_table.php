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
        Schema::create('property_checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('ID_no', 50);
            $table->string('item_name', 255);
            $table->integer('quantity');
            $table->float('unit_price');
            $table->string('receipt_no', 100);
            $table->date('rcpt_issued_date');
            $table->string('itemStatus', 100);
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
        Schema::dropIfExists('property_checkouts');
    }
};
