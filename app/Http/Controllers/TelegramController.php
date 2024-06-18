<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    public function sendMessage(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $text = $request->input('text');
        $model = $request->input('model');
        $make = $request->input('make');
        $vin = $request->input('vin');

        $message = "Name: $name\nEmail: $email\nMessage: $text\nModel: $model\nMake: $make\nVIN: $vin";
        $this->sendTelegramMessage($message);

        return back()->with('success', 'Message sent successfully!');
    }
    protected function sendTelegramMessage($message)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        $url = "https://api.telegram.org/bot$botToken/sendMessage";

        Http::withOptions(['verify' => false])->post($url, [
            'chat_id' => $chatId,
            'text' => $message,
        ]);
    }

}
