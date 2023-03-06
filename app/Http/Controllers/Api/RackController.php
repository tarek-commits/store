<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RackController extends Controller
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

        $rack = Rack::with('category:id,name','area:id,name')->orderBy('id','ASC')
                                ->limit($limit)
                                ->offset(($page -1)*$limit)
                                ->get();

              return response()->json([
                'rack' =>$rack,
                'count' => Rack::count()
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
            'area_id' => ['required','exists:areas,id'],
            'category_id' =>['required','exists:categories,id'],
            'size' => ['in:small,medium,large'],
            'height' => ['numeric'],
            'width' => ['numeric'],
            'lenght' => ['numeric'],

        ]);


        $area = Rack::create($request->all());

        return Response::json($area, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rack $rack)
    {
        return $rack->load('category:id,name','area:id,name');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rack $rack)
    {
        $request->validate([
            'name' => ['sometimes','required','string','max:255'],
            'code' => ['sometimes','required','string','between:4,100'],
            'area_id' => ['sometimes','required','exists:areas,id'],
            'category_id' =>['sometimes','required','exists:categories,id'],
            'size' => ['in:small,medium,large'],
            'height' => ['numeric'],
            'width' => ['numeric'],
            'lenght' => ['numeric'],

        ]);

        $rack->update($request->all());

        return Response::json($rack);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rack::destroy($id);
        return response()->json([
            'message' => 'Rack deleted successfully',
        ],200);
    }


}
