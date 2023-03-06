<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'category_id',
        'area_id',
        'code',
        'size',
        'height',
        'width',
        'lenght',

    ];


    // One Rack Follow One Category... where "category_id" is Foriegn Key & "id" Is Local Key
   public function category()
   {
       return $this->belongsTo(Category::class, 'category_id', 'id');
   }

     // One Rack Follow One area ... where "area_id" is Foriegn Key & "id" Is Local Key
     public function area()
     {
         return $this->belongsTo(Area::class, 'area_id', 'id');
     }

     // One Rack has Many Location ... Where "rack_id" is Foreign Key & "id" Is Local Key
   public function locations()
   {
       return $this->hasMany(Location::class, 'rack_id', 'id');
   }

}
