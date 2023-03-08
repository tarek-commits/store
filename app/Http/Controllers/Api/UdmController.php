<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Udm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UdmController extends Controller
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

        $udms = Udm::with('warhouse:id,name')->orderBy('id','ASC')
                                                ->limit($limit)
                                                ->offset(($page -1)*$limit)
                                                ->get();

              return response()->json([
                'udms' =>$udms,
                'count' => Udm::count()
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

            'number_of_udms' =>     ['required','integer'],
            'warehouse_id' =>       ['required','exists:warehouses,id'],
        ]);




        $udm = Udm::create($request->all());

        return Response::json($udm, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Udm $udm)
    {
            return $udm->load('warhouse:id,name');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Udm $udm)
    {

        $request->validate([

            'number_of_udms' =>     ['sometimes','required','integer'],
            'warehouse_id' =>       ['sometimes','required','exists:warehouses,id'],
        ]);


        $udm->update($request->all());

        return Response::json($udm);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Udm::destroy($id);
        return response()->json([
            'message' => 'Udm deleted successfully',
        ],200);
    }
}
