<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Symfony\Component\Intl\Countries;

class CarrierController extends Controller
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

        $carriers = Carrier::with('warhouse:id,name','logistic:id,name')
                                ->orderBy('id','ASC')
                                ->limit($limit)
                                ->offset(($page -1)*$limit)
                                ->get();

              return response()->json([
                'carriers' =>$carriers,
                'count' => Carrier::count(),
                'countries' => Countries::getNames('GB')
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
            'company_name' =>            ['required','string'],
            'code' =>                    ['required','string','between:2,100'],
            'warehouse_id' =>            ['required','exists:warehouses,id'],
            'logistic_company_id' =>     ['required','exists:logistic_companies,id'],
            'email' =>                   ['nullable','email'],
            'contact_number' =>           ['nullable','numeric','min:8'],
            'contact_name' =>              ['nullable','string'],
            'country' =>                    ['required','string'],
            'tracking_url' =>               ['nullable','url'],
            'integration_methos' =>          ['in:not_integrated,marketplace_integrated_carrier,wareo_integrated_carrier'],
            'print_plain_label' =>              ['nullable','boolean'],
            'Print_On_Zebra_Printer' =>        ['nullable','boolean'],
            'support_return' =>                 ['nullable','boolean'],
            'support_multiparcel' =>           ['nullable','boolean'],
            'Import_AWB_tracking_series' =>    ['nullable','boolean'],
            'order_RTS_on_AWB_upload' =>        ['nullable','boolean'],
            'label_density' =>                  ['nullable','srting'],


        ]);


        $carrier = Carrier::create($request->all());

        return Response::json($carrier, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Carrier $carrier)
    {
        return $carrier->load('warhouse:id,name','logistic:id,name');
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
