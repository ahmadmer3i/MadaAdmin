<?php

namespace Database\Seeders;

use App\Models\ShortMessageCount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class MessageCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sms_count = Http::get('http://josmsservice.com/sms/api/GetBalance.cfm?AccName=' . env('SMS_NAME') . '&AccPass=' . env('SMS_PASSWORD'));
        ShortMessageCount::create([
            'sent' => 0,
            'remaining' => $sms_count->body(),
        ]);
    }
}
