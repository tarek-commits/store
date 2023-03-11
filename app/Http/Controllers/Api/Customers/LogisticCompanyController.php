<?php

namespace App\Http\Controllers\Api\Customers;

use App\Http\Controllers\Controller;
use App\Models\LogisticCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LogisticCompanyController extends Controller
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

            $logistic_company = LogisticCompany::orderBy('id','ASC')
                        ->limit($limit)
                        ->offset(($page -1)*$limit)
                        ->get();

                        return Response::json([
                            'logistic_companies' => $logistic_company,
                            'count' => LogisticCompany::count()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(LogisticCompany $logistic_company)
    {
        return $logistic_company;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
