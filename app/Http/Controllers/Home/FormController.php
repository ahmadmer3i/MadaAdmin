<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use App\Models\ShortMessageCount;
use ArPHP\I18N\Arabic;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('form-application.applications');
    }

    public function send_approval_sms($id)
    {
        $applyForm = ApplyForm::find($id);
        $smsCount = ShortMessageCount::find(1);
        $phone = '962' . $applyForm->apply_phone;
        $sms_body = "your application has been approved";
        $count = Http::get('http://josmsservice.com/sms/api/GetBalance.cfm?AccName=' . config('app.sms_name') . '&AccPass=' . config('app.sms_password'));
        if ($count->body() > 0) {
            $response = Http::get('https://josmsservice.com/SMSServices/Clients/Prof/RestSingleSMS/SendSMS?senderid=' . config('app.sms_sender_id') . '&numbers=' . $phone . '&accname=' . config('app.sms_name') . '&AccPass=' . config('app.sms_password') . '&msg=' . $sms_body);
            $count = Http::get('http://josmsservice.com/sms/api/GetBalance.cfm?AccName=' . config('app.sms_name') . '&AccPass=' . config('app.sms_password'));
            $smsCount->update([
                'sent' => $smsCount->sent + 1,
                'remaining' => $count->body(),

            ]);
            return back()->with([ 'message' => 'Message Sent Successfully', 'alert-type' => 'success' ]);
        }

        return back()->with([ 'message' => 'Please refill your sms package', 'alert-type' => 'error' ]);
//        return $response->status();
    }

    public function send_reject_sms($id)
    {
        $applyForm = ApplyForm::find($id);
        $smsCount = ShortMessageCount::find(1);
        $phone = '962' . $applyForm->apply_phone;
        $sms_body = "your application has been rejected";
        $count = Http::get('http://josmsservice.com/sms/api/GetBalance.cfm?AccName=' . config('app.sms_name') . '&AccPass=' . config('app.sms_password'));
        if ($count->body() > 0) {
            $response = Http::get('https://josmsservice.com/SMSServices/Clients/Prof/RestSingleSMS/SendSMS?senderid=' . config('app.sms_sender_id') . '&numbers=' . $phone . '&accname=' . config('app.sms_name') . '&AccPass=' . config('app.sms_password') . '&msg=' . $sms_body);
            $count = Http::get('http://josmsservice.com/sms/api/GetBalance.cfm?AccName=' . config('app.sms_name') . '&AccPass=' . config('app.sms_password'));
            $smsCount->update([
                'sent' => $smsCount->sent + 1,
                'remaining' => $count->body(),

            ]);
            return back()->with([ 'message' => 'Message Sent Successfully', 'alert-type' => 'success' ]);
        }

        return back()->with([ 'message' => 'Please refill your sms package', 'alert-type' => 'error' ]);
//        return $response->status();
    }

    public function delete_application($id)
    {
        $apply_form = ApplyForm::find($id);
        if ($apply_form->attachment1 && file_exists('uploads/id_images/' . $apply_form->apply_id_image)) {
            unlink('uploads/id_images/' . $apply_form->apply_id_image);
        }
        if ($apply_form->attachment1 && file_exists('uploads/id_images/' . $apply_form->sponsor_id_image)) {
            unlink('uploads/id_images/' . $apply_form->sponsor_id_image);
        }
        if ($apply_form->attachment1 && file_exists('uploads/id_images/' . $apply_form->attachment1)) {
            unlink('uploads/id_images/' . $apply_form->attachment1);
        }
        if ($apply_form->attachment1 && file_exists('uploads/id_images/' . $apply_form->attachment2)) {
            unlink('uploads/id_images/' . $apply_form->attachment2);
        }
        $apply_form->delete();
        return redirect()->back()->with([ 'message' => 'Deleted Successfully', 'alert-type' => 'error' ]);
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
