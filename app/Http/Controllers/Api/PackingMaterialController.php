<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PackingMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PackingMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->has('page')? $request->get('page')  :1 ;

        $limit = $request->has('limit')?$request->get('limit'): 5;

        $packing_material = PackingMaterial::with('warhouse:id,name','companies:id,customer_name','material_type:id,name')
                                ->orderBy('id','ASC')
                                ->limit($limit)
                                ->offset(($page -1)*$limit)
                                ->get();

              return response()->json([
                'packing_materials' =>$packing_material,
                'count' => PackingMaterial::count()
              ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' =>        ['required','string','max:255'],
            'sku' =>        ['required','string','between:2,100'],
            'warehouse_id' => ['required','exists:warehouses,id'],
            'company_id' =>  ['required','exists:companies,id'],
            'material_id' =>     ['required','exists:material_types,id'],
           // 'unit' =>            ['required','in:inch,centimeter','millimeter'],
            'material_weight' =>        ['required','numeric'],
            'number_of_units' =>        ['required','numeric'],
            'threshold_limit' =>        ['required','numeric'],
            'height' =>                 ['required','numeric'],
            'width' =>                 ['required','numeric'],
            'lenght' =>                ['required','numeric'],

           'capture_height_at_packing' => ['boolean'],
            'make_as_innerpacking_material' =>      ['boolean']


        ]);


        $packing_material = PackingMaterial::create($request->all());

        return Response::json($packing_material, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PackingMaterial $packingMaterial)
    {
        return $packingMaterial->load('warhouse:id,name','companies:id,customer_name','material_type:id,name');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackingMaterial $packing_material)
    {
        $request->validate([

            'name' =>        ['sometimes','required','string','max:255'],
            'sku' =>        ['sometimes','required','string','between:2,100'],
            'warehouse_id' => ['sometimes','required','exists:warehouses,id'],
            'company_id' =>  ['sometimes','required','exists:companies,id'],
            'material_id' =>     ['sometimes','required','exists:material_types,id'],
           // 'unit' =>            ['in:inch,centimeter','millimeter'],
            'material_weight' =>        ['sometimes','required','numeric'],
            'number_of_units' =>        ['sometimes','required','numeric'],
            'threshold_limit' =>        ['sometimes','required','numeric'],
            'height' =>                 ['sometimes','required','numeric'],
            'width' =>                 ['sometimes','required','numeric'],
            'lenght' =>                ['sometimes','required','numeric'],

           'capture_height_at_packing' => ['boolean'],
            'make_as_innerpacking_material' =>   ['boolean']


        ]);

        $packing_material->update($request->all());

        return Response::json($packing_material);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PackingMaterial::destroy($id);
        return response()->json([
            'message' => 'packing_material deleted successfully',
        ],200);

    }
}
