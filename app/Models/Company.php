<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name','code','business_name','business_url','customer_types','status','industry_id','warehouse_id',
        'contact_name','contact_number','email_id','vat_registeration_number','gst_number',
        'logo','address_line01','address_line02','city','postal_code','country','state',
        'crimd_number','eori_number','storage_id','storage_volume','','tentative_sku',
        'tentative_unit','tentative_order','details','identification_number','destination_country',
        'order_source','contract_date','expires_on','go_live_date','SLA_Unit',
        'purchase_order','advanced_shipping_note','goods_receving_note','receving','putaway',
        'counting','allow_capture','allow_only_po_quantity','b2b_order_assignment',
        'b2b_picking','b2b_qc','b2b_packing','b2b_dispatch','b2b_packing_simplified',
        'b2b_picking_input','b2b_qc_input','b2c_order_assignment','b2c_picking','b2c_picking_scan',
        'b2c_picking_allow','b2c_qc','b2c_packing','b2c_dispatch','currency','billing_cycle'
       ];
}
