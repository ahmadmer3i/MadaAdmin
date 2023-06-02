<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SendMessage;
use App\Models\ShortMessageCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SendMessageController extends Controller
{
    public function index()
    {
        $message_sent = SendMessage::all();
        return view('admin.messages.index', compact('message_sent'));
    }

    public function store(Request $request)
    {
        $smsCount = ShortMessageCount::find(1);
        $phone = '962' . $request->mobile;
        $sms_body = $request->message;
        $response = Http::get('https://josmsservice.com/SMSServices/Clients/Prof/RestSingleSMS/SendSMS?senderid=' . config('app.sms_sender_id') . '&numbers=' . $phone . '&accname=' . env('SMS_NAME') . '&AccPass=' . env('SMS_PASSWORD') . '&msg=' . $sms_body);
        $count = Http::get('http://josmsservice.com/sms/api/GetBalance.cfm?AccName=' . config('app.sms_name') . '&AccPass=' . config('app.sms_password'));
        $smsCount->update([
            'sent' => $smsCount->sent + 1,
            'remaining' => $count->body(),
        ]);
        if ($count > 0) {
            SendMessage::create([
                'mobile' => '962' . $request->mobile,
                'message' => $request->message,
            ]);
            return redirect()->route('messages.messages')->with([ 'message' => 'Message Sent Successfully', 'alert-type' => 'success' ]);
        }

        return redirect()->back()->with([ 'message' => 'Please refill your sms package', 'alert-type' => 'error' ]);
    }

    public function create()
    {
        return view('admin.messages.create');
    }
}
