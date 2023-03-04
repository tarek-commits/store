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

     // Location Inside Rack
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['pallet', 'shelf']);
            $table->string('name');
            $table->string('code');
            // If Deleted Parent(Category) The Child(Location) Will Not Delete But The Value Will Be Null
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            // If Deleted Parent(Rack)  The Child(Location) Will Not Delete But The Value Will Be Null
            $table->foreignId('rack_id')->nullable()->constrained('racks')->nullOnDelete();
            // If Deleted Parent(Storage_Type)  The Child(Location) Will Not Delete But The Value Will Be Null
            $table->foreignId('storage_id')->nullable()->constrained('storage_types')->nullOnDelete();
            $table->enum('type', ['pick face', 'pallet face']);
            $table->enum('size', ['small', 'medium','large']);
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
        Schema::dropIfExists('locations');
    }
};
