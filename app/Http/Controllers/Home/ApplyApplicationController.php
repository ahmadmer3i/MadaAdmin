<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ApplyFormService;
use App\Models\SalaryTransferWay;
use Illuminate\Http\Request;

class ApplyApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }

    public function application_services()
    {
        $services = ApplyFormService::all();
        return view('admin.form_application.application_services', compact('services'));
    }

    public function application_services_add()
    {
        return view('admin.form_application.application_services_add');
    }

    public function application_services_store(Request $request)
    {
        $application_service = new ApplyFormService();
        $application_service->name = $request->name;
        $application_service->save();
        $notification = array( 'message' => 'Service Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('form-application.services')->with($notification);
    }

    public function application_service_edit($id)
    {
        $service = ApplyFormService::findOrFail($id);
        return view('admin.form_application.application_services_edit', compact('service'));
    }

    public function application_service_update(Request $request)
    {
        ApplyFormService::find($request->id)->update([
            'name' => $request->name,
        ]);
        $notification = array( 'message' => 'Service Edited Successfully', 'alert-type' => 'warning' );
        return redirect()->route('form-application.services')->with($notification);
    }

    public function application_service_delete($id)
    {
        ApplyFormService::find($id)->delete();
        $notification = array( 'message' => 'Service Deleted Successfully', 'alert-type' => 'error' );
        return redirect()->back()->with($notification);
    }

    public function application_transfer_way()
    {
        $transfers = SalaryTransferWay::all();
        return view('admin.form_application.transfer_ways', compact('transfers'));
    }

    public function application_transfer_way_add()
    {
        return view('admin.form_application.transfer_ways_add');
    }

    public function application_transfer_way_store(Request $request)
    {
        $transfer_way = new SalaryTransferWay();
        $transfer_way->transfer_way = $request->transfer_way;
        $transfer_way->save();
        $notification = array( 'message' => 'Transfer Method Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('form-application.transfer-ways')->with($notification);
    }

    public function application_transfer_way_edit($id)
    {
        $transfer = SalaryTransferWay::find($id);
        return view('admin.form_application.transfer_ways_edit', compact('transfer'));
    }

    public function application_transfer_way_update(Request $request)
    {
        SalaryTransferWay::find($request->id)->update([
            'transfer_way' => $request->transfer_way,
        ]);
        $notification = array( 'message' => 'Transfer Method Edited Successfully', 'alert-type' => 'warning' );
        return redirect()->route('form-application.transfer-ways')->with($notification);
    }

    public function application_transfer_way_delete($id)
    {
        SalaryTransferWay::find($id)->delete();
        $notification = array( 'message' => 'Transfer Method Deleted Successfully', 'alert-type' => 'error' );
        return redirect()->back()->with($notification);
    }
}
