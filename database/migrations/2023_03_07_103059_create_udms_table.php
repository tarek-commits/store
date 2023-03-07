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
    //Udms Inside Warehouse
    public function up()
    {
        Schema::create('udms', function (Blueprint $table) {
            $table->id();
            // This Field Is Postivite Number Only
            $table->integer('number_of_udms')->unsigned();
             // If Deleted Parent(Warehouse) The Child(Udm) Will Be It
            $table->foreignId('warehouse_id')->constrained('warehouses')->cascadeOnDelete();
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
        Schema::dropIfExists('udms');
    }
};
