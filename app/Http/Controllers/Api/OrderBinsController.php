<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OrderBins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class OrderBinsController extends Controller
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

        $order_bins = OrderBins::with('warehouse:id,name')->orderBy('id','ASC')
                                                ->limit($limit)
                                                ->offset(($page -1)*$limit)
                                                ->get();

              return response()->json([
                'order_bins' =>$order_bins,
                'count' => OrderBins::count()
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

            'number_of_bins' =>     ['required','integer'],
            'prefix' =>             ['nullable','string'],
            'warehouse_id' =>       ['required','exists:warehouses,id'],
            'status' =>             ['nullable','in:Unallocated,Allocated'],
        ]);


        $order_bins = OrderBins::create($request->all());

        return Response::json($order_bins, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order_bins = OrderBins::findOrFail($id);
        return $order_bins->load('warehouse:id,name');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $order_bins = OrderBins::findOrFail($id);

        $request->validate([

            'number_of_bins' =>     ['sometimes','required','integer'],
            'prefix' =>             ['nullable','string'],
            'warehouse_id' =>       ['sometimes','required','exists:warehouses,id'],
            'status' =>             ['nullable','in:Unallocated,Allocated'],
        ]);


        $order_bins->update($request->all());

        return Response::json($order_bins);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrderBins::destroy($id);
        return response()->json([
            'message' => 'OrderBins deleted successfully',
        ],200);
    }
}
