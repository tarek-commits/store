<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackingMaterial extends Model
{
    use HasFactory;

    protected $fillable =[
        'name','sku','warehouse_id','material_id','company_id','material_weight','unit','height','width','lenght','number_of_units','threshold_limit',
        'make as innerpacking material','capture height at packing'
    ];

    // One Packing Follow One Warehouse
   public function warhouse()
   {
       return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id')->withDefault();
   }



   /**
    * Get all of the comments for the PackingMaterial
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function companies()
   {
       return $this->belongsTo(Company::class,'company_id', 'id');
   }

   public function material_type()
   {
       return $this->belongsTo(MaterialType::class,'material_id','id')->withDefault();
   }






}
