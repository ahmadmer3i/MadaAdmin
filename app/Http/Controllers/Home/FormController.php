<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }*/

    public function application_list()
    {
        $applications = ApplyForm::all();
        return view('admin.form_application.applications', compact('applications'));
    }

    public function application_details($id)
    {
        $application = ApplyForm::find($id);
        return view('admin.form_application.application_details', compact('application'));
    }

    public function application_details_submit(Request $request)
    {
        $approved = null;
        if ($request->approved == 'true') {
            $approved = true;
        } else if ($request->approved == 'false') {
            $approved = false;
        }
        ApplyForm::find($request->id)->update([

            'service_requested' => $request->service_requested,
            'service_type' => $request->service_type,
            'procedure_value' => $request->procedure_value,
            'payment_period' => $request->payment_period,
            'profit_ratio' => $request->profit_ratio,
            'total_amount' => $request->total_amount,
            'first_payment' => $request->first_payment,
            'installment_value' => $request->installment_value,
            'approved' => $approved,
        ]);
        return redirect()->route('form-application.applications');
    }

    public function PDF_download($id)
    {
        $application = ApplyForm::find($id);

        $pdf = PDF::loadView('admin.form_application.application_details_pdf', compact('application'));
        return $pdf->download('application.pdf');
    }
}
