<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LocationController extends Controller
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

        $locations = Location::with('category:id,name','rack:id,name','storage:id,name')
                                ->orderBy('id','ASC')
                                ->limit($limit)
                                ->offset(($page -1)*$limit)
                                ->get();

              return response()->json([
                'locations' =>$locations,
                'count' => Location::count()
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
            'status' =>      ['in:pallet,shelf'],
            'name' =>        ['required','string','max:255'],
            'code' =>        ['required','string','between:2,100'],
            'category_id' => ['required','exists:categories,id'],
            'storage_id' =>  ['required','exists:storage_types,id'],
            'rack_id' =>     ['required','exists:racks,id'],
            'type' =>        ['in:pick face,pallet face'],
            'size' =>        ['in:small,medium,large'],
            'height' =>      ['numeric'],
            'width' =>       ['numeric'],
            'lenght' =>      ['numeric'],


        ]);


        $location = Location::create($request->all());

        return Response::json($location, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return $location->load('category:id,name','rack:id,name','storage:id,name');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {

        $request->validate([
            'status' =>      ['in:pallet,shelf'],
            'name' =>        ['sometimes','required','string','max:255'],
            'code' =>        ['sometimes','required','string','between:2,100'],
            'category_id' => ['sometimes','required','exists:categories,id'],
            'storage_id' =>  ['sometimes','required','exists:storag_types,id'],
            'rack_id' =>     ['sometimes','required','exists:racks,id'],
            'type' =>        ['in:pick face,pallet face'],
            'size' =>        ['in:small,medium,large'],
            'height' =>      ['numeric'],
            'width' =>       ['numeric'],
            'lenght' =>      ['numeric'],


        ]);



        $location->update($request->all());

        return Response::json($location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::destroy($id);
        return response()->json([
            'message' => 'Location deleted successfully',
        ],200);
    }
}
