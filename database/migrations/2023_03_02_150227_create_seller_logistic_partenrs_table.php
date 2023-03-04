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

     // Seller Logistic Partener Inside Warehouse
    public function up()
    {
        Schema::create('seller_logistic_partenrs', function (Blueprint $table){
            $table->id();
            $table->string('partner_mp_code');
            $table->foreignId('warehouse_id')->constrained('warehouses')->cascadeOnDelete();
            $table->foreignId('logistic_partenrs_id')->nullable()->constrained('logistic_partenrs')->nullOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('compaines')->nullOnDelete();
            $table->string('seller_source');
            $table->string('key');
            $table->string('value');
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
        Schema::dropIfExists('seller_logistic_partenrs');
    }
};
