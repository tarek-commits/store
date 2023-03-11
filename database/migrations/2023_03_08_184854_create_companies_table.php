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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('code');
            $table->string('business_name');
            $table->string('business_url')->nullable();
             $table->enum('customer_types',['Self Usage','Fulfilment Center','Self Uasge And Fulfilment Center'])->default('Self Usage');
             $table->enum('status',['active','inactive','pending','rejected'])->default('pending');
             $table->foreignId('industry_id')->nullable()->constrained('industries')->nullOnDelete();
             $table->foreignId('parent_id')->nullable()->constrained('companies','id')->nullOnDelete();
            $table->foreignId('warehouse_id')->constrained('warehouses')->cascadeOnDelete();
            $table->string('contact_name');
            $table->integer('contact_number');
            $table->string('email_id');
            $table->string('vat_registeration_number')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('logo')->nullable();
            $table->string('address_line01');
            $table->string('address_line02');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('state');
            $table->string('crimd_number')->nullable();
            $table->string('eori_number')->nullable();
            $table->foreignId('storage_id')->nullable()->constrained('storage_types')->nullOnDelete();
            $table->integer('storage_volume')->nullable();
            $table->integer('tentative_sku')->nullable();
            $table->integer('tentative_unit')->nullable();
            $table->integer('tentative_order')->nullable();
            $table->enum('details',['IOSS','VOEC','CHE','ART_23'])->default('IOSS');
            $table->integer('identification_number')->nullable();
            $table->string('destination_country')->nullable();
            $table->enum('order_source',['All','Web','Bulk','open_api','Spopify Store AM'])->default('all')->nullable();
            $table->date('contract_date');
            $table->date('expires_on');
            $table->date('go_live_date');
            $table->enum('SLA_Unit',['Days','Weeks','Months','Mins','Hrs'])->default('Days');
            $table->integer('purchase_order')->default(1);
            $table->integer('advanced_shipping_note')->nullable()->default(0);
            $table->integer('goods_receving_note')->nullable()->default(0);
            $table->integer('receving')->nullable()->default(0);
            $table->integer('putaway')->nullable()->default(0);
            $table->integer('counting')->nullable()->default(0);
            $table->integer('allow_capture')->nullable()->default(0);
            $table->integer('allow_only_po_quantity')->nullable()->default(0);
            $table->integer('b2b_order_assignment')->nullable()->default(0);
            $table->integer('b2b_picking')->nullable()->default(0);
            $table->integer('b2b_qc')->nullable()->default(0);
            $table->integer('b2b_packing')->nullable()->default(0);
            $table->integer('b2b_dispatch')->nullable()->default(0);
            $table->integer('b2b_packing_simplified')->nullable()->default(0);
            $table->integer('b2b_picking_input')->nullable()->default(0);
            $table->integer('b2b_qc_input')->nullable()->default(0);
            $table->integer('b2c_order_assignment')->nullable()->default(0);
            $table->integer('b2c_picking')->nullable()->default(0);
            $table->integer('b2c_picking_scan')->nullable()->default(0);
            $table->integer('b2c_picking_allow')->nullable()->default(0);
            $table->integer('b2c_qc')->nullable()->default(0);
            $table->integer('b2c_packing')->nullable()->default(0);
            $table->integer('b2c_dispatch')->nullable()->default(0);
            $table->string('currency');
            $table->enum('billing_cycle',['Weekly','Monthly','Daily'])->default('Weekly');
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
        Schema::dropIfExists('companies');
    }
};
