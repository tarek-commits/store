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

     // Areas Inside Warehous
    public function up()
    {

        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            // If Deleted Parent(Warehouse) The Child(Area) Will Be It
            $table->foreignId('warehouse_id')->constrained('warehouses')->cascadeOnDelete();
            // If Deleted Parent(Category) The Child(Area) Will Not Delete But The Value Will Be Null
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->float('height')->nullable();
            $table->float('width')->nullable();
            $table->float('lenght')->nullable();
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
        Schema::dropIfExists('areas');
    }
};
