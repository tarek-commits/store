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

     // Carriers Inside Warehouse
    public function up()
    {

        Schema::create('carriers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('code');
            $table->foreignId('warehouse_id')->constrained('warehouses')->cascadeOnDelete();
            $table->foreignId('logistic_company_id')->nullable()->constrained('logistic_compaines')->nullOnDelete();
            $table->string('email')->unique();
            $table->integer('contact_number')->unsigned()->unique();
            $table->string('tracking_url')->unique();
            $table->string('person_name');
            $table->enum('integration_methos', ['not_integrated','marketplace_integrated_carrier','wareo_integrated_carrier'])
                    ->default('not_integrated');
            $table->enum('print_setting', ['print_plain_label', 'Print_On_Zebra_Printer']);
            $table->enum('support', ['support_return','support_multiparcel']);
            $table->enum('AWB_setting', ['Import_AWB_tracking_series','order_RTS_on_AWB_upload']);
            $table->string('label_density');
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
        Schema::dropIfExists('carriers');
    }
};
