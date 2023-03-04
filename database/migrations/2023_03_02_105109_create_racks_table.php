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

     // Racks Inside Area
    public function up()
    {

        Schema::create('racks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            // If Deleted Parent(Category) The Child(Area) Will Not Delete But The Value Will Be Null
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            // If Deleted Parent(Area) The Child(Rack) Will Not Delete But The Value Will Be Null
            $table->foreignId('area_id')->nullable()->constrained('areas')->nullOnDelete();
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
        Schema::dropIfExists('racks');
    }
};
