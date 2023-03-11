<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    use HasFactory;

    protected $fillable =[
        'company_name','code','warehouse_id','logistic_company_id','email','contact_number',
        'contact_name','country','tracking_url','integration_methos','print_plain_label',
        'Print_On_Zebra_Printer','support_return','support_multiparcel',
        'Import_AWB_tracking_series','order_RTS_on_AWB_upload','label_density'
    ];

    public function warhouse()
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id')->withDefault();
    }

    public function logistic()
    {
        return $this->belongsTo(LogisticCompany::class, 'logistic_company_id', 'id')->withDefault();
    }
}
