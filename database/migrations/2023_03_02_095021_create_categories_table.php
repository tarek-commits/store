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

    // Category Management
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->string('code')->nullable();
            $table->text('description')->nullable();
            $table->string('plu_formule');
            $table->float('price_tolerance')->nullable();
            $table->float('weight_tolerance')->nullable();
            $table->enum('Qc_parameter',['visual_inspection','packing_inspection','tempeature_inspection']);
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
        Schema::dropIfExists('categories');
    }
};
