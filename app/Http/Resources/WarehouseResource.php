<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WarehouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

       return [
        'id' => $this->id,
        'name' =>$this->name,
        'code' =>$this->code,
        'address' =>$this->address,
        'num_of_section' => 2,
        'num_of_location' =>72,
        'warehouse_admin' => [
            'name' => $this->user->name,
        ],
        'contact_num' =>$this->contact_num,
        'created_at' =>$this->created_at,
        'updated_at' =>$this->updated_at,


       ];

    }
}
