<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'code',
        'address',
        'user_id',
        'contact_num'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id')->withDefault();
    }


    // One Warehouse Has Many Areas ... where "warehouse_id" Is Foriegn Key & "id" Is Local Key
    public function areas()
    {
        return $this->hasMany(Area::class, 'warehouse_id', 'id');
    }



}
