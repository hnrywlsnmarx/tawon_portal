<?php

namespace App\Http\Controllers;

use App\Exports\VCustomerMonitoringExport;
use Illuminate\Http\Request;


use App\Models\VCustomerMonitoringModel;
use App\Http\Requests\StoreV_customer_monitoringRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\UpdateV_customer_monitoringRequest;
use App\Http\Controllers\Controller;

class VCustomerMonitoringController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:administrator');
        // $this->middleware('role:administrator');
    }

    public function index(Request $request)
    {

        $branch_id = session('branch');
        $firstchar = $branch_id[0];
        // dd($branch_id);

        if ($firstchar != 0) {
            $cus_no = VCustomerMonitoringModel::where("OPN_BR_CD", "=", $branch_id)->paginate(100);
        } else {
            $cus_no = VCustomerMonitoringModel::paginate(100);
        }

        return view('cus_no.index', [
            'cus_no' => $cus_no,
            'cus_class_cd' => 'CUSS_CLASS_CD',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function export()
    {
        return Excel::download(new VCustomerMonitoringExport, 'CustomerMonitoring.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreV_customer_monitoringRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreV_customer_monitoringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\V_customer_monitoring  $v_customer_monitoring
     * @return \Illuminate\Http\Response
     */
    public function show(VCustomerMonitoringModel $cus_no)
    {
        //
        return view('cus_no.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\V_customer_monitoring  $v_customer_monitoring
     * @return \Illuminate\Http\Response
     */
    public function edit(VCustomerMonitoringModel $v_customer_monitoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateV_customer_monitoringRequest  $request
     * @param  \App\Models\V_customer_monitoring  $v_customer_monitoring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateV_customer_monitoringRequest $request, VCustomerMonitoringModel $v_customer_monitoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\V_customer_monitoring  $v_customer_monitoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(VCustomerMonitoringModel $v_customer_monitoring)
    {
        //
    }
}
