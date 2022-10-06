<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use ArPHP\I18N\Arabic;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Illuminate\Support\Facades\App;
use Mpdf\MpdfException;

class FormController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }*/

    public function application_list()
    {
        $applications = ApplyForm::latest()->get();
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

    public function send_approval_sms($id)
    {
        $applyForm = ApplyForm::find($id);
        $phone = '962' . $applyForm->apply_phone;
        $sms_body = "your application has been approved";
        $response = Http::get('https://josmsservice.com/SMSServices/Clients/Prof/RestSingleSMS/SendSMS?senderid=MadaLeasing&numbers=' . $phone . '&accname=madaleasing&AccPass=wA3@gM5@uQ4@hB9zH9v&msg=' . $sms_body);
        return back()->with([ 'message' => 'Message Sent Successfully', 'alert-type' => 'success' ]);
//        return $response->status();
    }

    /**
     * @throws MpdfException
     */
    public function PDF_download($id)
    {

        $application = ApplyForm::find($id);
        $data = [ 'application' => $application,
            'date' => date('j F Y', strtotime($application->created_at)),
            'image' => public_path('backend/assets/images/logo-dark.png')
        ];

        $pdf = PDF::loadView('admin.form_application.application_details_pdf', $data);
        return $pdf->download($application->created_at . '-' . $application->id . '.pdf');
    }
}
