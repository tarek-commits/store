<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'category_id',
        'rack_id',
        'storage_id',
        'code',
        'status',
        'type',
        'size',
        'height',
        'width',
        'lenght',

    ];

    // One Location Follow One Category... where "category_id" is Foriegn Key & "id" Is Local Key
   public function category()
   {
       return $this->belongsTo(Category::class, 'category_id', 'id');
   }

    // One Location Follow One Rack... where "rack_id" is Foriegn Key & "id" Is Local Key
    public function rack()
    {
        return $this->belongsTo(Rack::class, 'rack_id', 'id');
    }

    public function storage()
    {
        return $this->belongsTo(StorageType::class, 'storage_id', 'id');
    }
}
