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
        Schema::create('carriers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('code');
            $table->foreignId('warehouse_id')->constrained('warehouses')->cascadeOnDelete();
            $table->foreignId('logistic_company_id')->nullable()->constrained('logistic_companies')->nullOnDelete();
            $table->string('email')->nullable();
            $table->integer('contact_number')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('country');
            $table->string('tracking_url')->nullable();
            $table->enum('integration_methos', ['not_integrated','marketplace_integrated_carrier','wareo_integrated_carrier'])
                    ->default('not_integrated');
            $table->boolean('print_plain_label')->nullable()->default(0);
            $table->boolean('Print_On_Zebra_Printer')->nullable()->default(0);
            $table->boolean('support_return')->nullable()->default(0);
            $table->boolean('support_multiparcel')->nullable()->default(0);
            $table->boolean('Import_AWB_tracking_series')->nullable()->default(0);
            $table->boolean('order_RTS_on_AWB_upload')->nullable()->default(0);
            $table->string('label_density')->nullable();
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
