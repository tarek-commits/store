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

     // Packing Materials Inside Warehouse
    public function up()
    {

        Schema::create('packing_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
             // if Deleted Parent(Warehouse) The Child(packing materials) Will Be It
            $table->foreignId('warehouse_id')->constrained('warehouses')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('compaines')->nullOnDelete();
            $table->foreignId('material_id')->nullable()->constrained('material_types')->nullOnDelete();
            $table->float('material_weight');
            $table->enum('unit', ['inch', 'centimeter','millimeter']);
            $table->float('height')->nullable();
            $table->float('width')->nullable();
            $table->float('lenght')->nullable();
            $table->integer('number_of_units')->unsigned();
            $table->integer('threshold_limit')->unsigned();
            $table->enum('chargable', ['make as innerpacking material','capture height at packing']);
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
        Schema::dropIfExists('packing_materials');
    }
};
