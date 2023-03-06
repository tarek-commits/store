<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WarehouseResource;
use App\Models\Warehouse;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Return 5 Warehouses Per Page
    public function index(Request $request)
    {
        $page = $request->has('page')? $request->get('page')  :1 ;

        $limit = $request->has('limit')?$request->get('limit'): 5;

        $warehouse = Warehouse::with('user:id,name')->orderBy('id','ASC')
                                ->limit($limit)
                                ->offset(($page -1)*$limit)
                                ->get();


            return response()->json([
                'warehouse' =>$warehouse,
                'count' => Warehouse::count()
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
            'name' => ['required','string','max:255'],
            'code' => ['required','string','between:4,100'],
            'address' => ['required','string'],
            'user_id' =>['required','exists:users,id'],
            'contact_num' => ['required','integer']

        ]);


        $warehouse = Warehouse::create($request->all());

        return Response::json($warehouse, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Return Single Warehouse
    public function show(Warehouse $warehouse)
    {

       return $warehouse->load('user:id,name');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warehouse $warehouse)
    {

          $request->validate([
            'name' => ['sometimes','required','string','max:255'],
            'code' => ['sometimes','required','string','between:4,100'],
            'address' => ['sometimes','required','string'],
            'user_id' =>['sometimes','required','exists:users,id'],
            'contact_num' => ['sometimes','required','integer']

        ]);

        $warehouse->update($request->all());

        return Response::json($warehouse);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Warehouse::destroy($id);
        return response()->json([
            'message' => 'Warehouse deleted successfully',
        ],200);
    }

}
