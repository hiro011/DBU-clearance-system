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
        Schema::create('library_checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('card_no', 50);
            $table->string('barcode', 100);
            $table->text('title');
            $table->string('library', 250);
            $table->string('catagory', 250);
            $table->string('location', 250)->nullable();
            $table->string('due_date', 250); 
            $table->integer('charge')->nullable();
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
        Schema::dropIfExists('library_checkouts');
    }
};
