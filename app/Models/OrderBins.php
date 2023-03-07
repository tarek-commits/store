<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBins extends Model
{
    use HasFactory;

    protected $fillable= [
        'number_of_bins',
        'prefix',
        'warehouse_id',
        'status'
    ];

    // One orderbins Follow One Warehouse
   public function warehouse()
   {
       return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id')->withDefault();
   }
}
