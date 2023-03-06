<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AreaController extends Controller
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

        $area = Area::with('category:id,name','warhouse:id,name')->orderBy('id','ASC')
                                ->limit($limit)
                                ->offset(($page -1)*$limit)
                                ->get();

                return Response::json($area);
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
            'name' => ['required','string','max:255'],
            'code' => ['required','string','between:4,100'],
            'warehouse_id' => ['required','exists:warehouses,id'],
            'category_id' =>['required','exists:categories,id'],
            'height' => ['numeric'],
            'width' => ['numeric'],
            'lenght' => ['numeric'],

        ]);


        $area = Area::create($request->all());

        return Response::json($area, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        return $area->load('category:id,name','warhouse:id,name');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => ['sometimes','required','string','max:255'],
            'code' => ['sometimes','required','string','between:4,100'],
            'warehouse_id' => ['sometimes','required','exists:warehouses,id'],
            'category_id' =>['sometimes','required','exists:categories,id'],
            'height' => ['numeric'],
            'width' => ['numeric'],
            'lenght' => ['numeric'],

        ]);

        $area->update($request->all());

        return Response::json($area);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Area::destroy($id);
        return response()->json([
            'message' => 'Area deleted successfully',
        ],200);
    }

    public function Count(){

        return Area::count();
    }
}
