<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
    ];


    // One Warehouse Has Many Areas ... where "warehouse_id" Is Foriegn Key & "id" Is Local Key
    public function areas()
    {
        return $this->hasMany(Area::class, 'warehouse_id', 'id');
    }



}
