<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class NotificationController extends Controller
{
    /**
     * @throws TwilioException
     * @throws ConfigurationException
     */
//    public function sendSmsNotificaition()
//    {
//        /* $basic = new \Vonage\Client\Credentials\Basic('37f4b33e', '8TFdzm2CYXjq0tSa');
//         $client = new \Vonage\Client($basic);
//         $message = $client->message()->sendText('962778443322', '962778443322', 'Test Message');
//
//         dd($message);*/
////        $account_sid = getenv("TWILIO_SID");
////        $auth_token = getenv("TWILIO_AUTH_TOKEN");
////        $twilio_number = getenv("TWILIO_NUMBER");
////        $client = new Client($account_sid, $auth_token);
////        $client->messages->create('+962778443322',
////            [ 'from' => $twilio_number, 'body' => "Test" ]);
//
//
//    }
}
