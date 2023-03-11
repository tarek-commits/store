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
        Schema::create('packing_materials', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('sku');
             // if Deleted Parent(Warehouse) The Child(packing materials) Will Be It
            $table->foreignId('warehouse_id')->constrained('warehouses')->cascadeOnDelete();
            $table->foreignId('material_id')->nullable()->constrained('material_types')->nullOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->nullOnDelete();
            $table->float('material_weight');
            $table->enum('unit', ['inch', 'centimeter','millimeter']);
            $table->float('height');
            $table->float('width');
            $table->float('lenght');
            $table->integer('number_of_units')->unsigned();
            $table->integer('threshold_limit')->unsigned();
            $table->boolean('make_as_innerpacking_material')->default(0);
            $table->boolean('capture_height_at_packing')->default(0);
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
