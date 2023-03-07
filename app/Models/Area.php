<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'category_id',
        'warehouse_id',
        'code',
        'height',
        'width',
        'lenght',

    ];


    // One Area Follow One Category... where "category_id" is Foriegn Key & "id" Is Local Key
   public function category()
   {
       return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault();
   }


  // One Area Has Many Racks ... where "area_id" is Foriegn Key & "id" Is Local Key
   public function Racks()
   {
       return $this->hasMany(Rack::class, 'eare_id', 'id');
   }

   // One Area Follow One Warehouse
   public function warhouse()
   {
       return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id')->withDefault();
   }
}
