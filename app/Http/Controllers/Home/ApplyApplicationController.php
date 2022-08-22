<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ApplyFormService;
use App\Models\FormBank;
use App\Models\FormMaterialStatus;
use App\Models\FormQualification;
use App\Models\SalaryTransferWay;
use App\Models\ServicesCategory;
use Illuminate\Http\Request;

class ApplyApplicationController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }*/

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

    public function application_qualification()
    {
        $qualifications = FormQualification::all();
        return view('admin.form_application.application_qualification', compact('qualifications'));
    }

    public function application_qualification_add()
    {
        return view('admin.form_application.application_qualification_add');
    }

    public function application_qualification_store(Request $request)
    {
        $qualification = new FormQualification();
        $qualification->name = $request->name;
        $qualification->save();
        $notification = array( 'message' => 'Qualification Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('form-application.qualification')->with($notification);
    }

    public function application_qualification_edit($id)
    {
        $qualification = FormQualification::find($id);
        return view('admin.form_application.application_qualification_edit', compact('qualification'));
    }

    public function application_qualification_update(Request $request)
    {
        FormQualification::find($request->id)->update([
            'name' => $request->name,
        ]);
        $notification = array( 'message' => 'Qualification Updated Successfully', 'alert-type' => 'warning' );
        return redirect()->route('form-application.qualification')->with($notification);
    }

    public function application_qualification_delete($id)
    {
        FormQualification::find($id)->delete();
        $notification = array( 'message' => 'Qualification Deleted Successfully', 'alert-type' => 'error' );
        return redirect()->back()->with($notification);
    }

    public function application_material_status()
    {
        $statuses = FormMaterialStatus::all();
        return view('admin.form_application.application_material_status', compact('statuses'));
    }

    public function application_material_status_add()
    {
        return view('admin.form_application.application_material_status_add');
    }

    public function application_material_status_store(Request $request)
    {
        $status = new FormMaterialStatus();
        $status->name = $request->name;
        $status->save();
        $notification = array( 'message' => 'Status Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('form-application.material-status')->with($notification);
    }

    public function application_material_status_edit($id)
    {
        $status = FormMaterialStatus::find($id);
        return view('admin.form_application.application_material_status_edit', compact('status'));
    }

    public function application_material_status_update(Request $request)
    {
        FormMaterialStatus::find($request->id)->update([
            'name' => $request->name,
        ]);
        $notification = array( 'message' => 'Status Updated Successfully', 'alert-type' => 'warning' );
        return redirect()->route('form-application.material-status')->with($notification);
    }

    public function application_material_status_delete($id)
    {
        FormMaterialStatus::find($id)->delete();
        $notification = array( 'message' => 'Status Deleted Successfully', 'alert-type' => 'error' );
        return redirect()->back()->with($notification);
    }

    public function application_banks()
    {
        $banks = FormBank::all();
        return view('admin.form_application.application_bank', compact('banks'));
    }

    public function application_banks_add()
    {
        return view('admin.form_application.application_bank_add');
    }

    public function application_banks_store(Request $request)
    {
        $bank = new FormBank();
        $bank->name = $request->name;
        $bank->save();
        $notification = array( 'message' => 'Bank Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('form-application.banks')->with($notification);
    }

    public function application_banks_edit($id)
    {
        $bank = FormBank::findOrFail($id);
        return view('admin.form_application.application_bank_edit', compact('bank'));
    }

    public function application_banks_update(Request $request)
    {
        FormBank::findOrFail($request->id)->update([
            'name' => $request->name,
        ]);
        $notification = array( 'message' => 'Bank Updated Successfully', 'alert-type' => 'warning' );
        return redirect()->route('form-application.banks')->with($notification);
    }

    public function application_banks_delete($id)
    {
        FormBank::findOrFail($id)->delete();
        $notification = array( 'message' => 'Bank Deleted Successfully', 'alert-type' => 'error' );
        return redirect()->back()->with($notification);
    }

    public function application_service_category_store(Request $request)
    {
        $id = $request->id;
        $category = new ServicesCategory();

        $category->name = $request->category_name;
        $category->service_id = $id;
        $category->save();
        $notification = array( 'message' => 'Category Added Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }
}
