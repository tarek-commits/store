<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'short_name',
        'description',
        'code',
        'plu_formule',
        'price_tolerance',
        'weight_tolerance',
        'Qc_parameter'
    ];


    // One Category has Many Areas ... Where "category_id" is Foreign Key & "id" Is Local Key
  public function areas()
  {
      return $this->hasMany(Area::class, 'category_id', 'id');
  }

   // One Category has Many Racks ... Where "category_id" is Foreign Key & "id" Is Local Key
   public function racks()
   {
       return $this->hasMany(Rack::class, 'category_id', 'id');
   }

    // One Category has Many Locations ... Where "category_id" is Foreign Key & "id" Is Local Key
    public function locations()
    {
        return $this->hasMany(Location::class, 'category_id', 'id');
    }


}
