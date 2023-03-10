<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Udm extends Model
{
    use HasFactory;

    protected $fillable= [
        'number_of_udms',
        'warehouse_id',


    ];


   // One udm Follow One Warehouse
   public function warhouse()
   {
       return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id')->withDefault();
   }
}
