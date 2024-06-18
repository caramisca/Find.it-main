<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ChatGPTControllerPC extends Controller
{


    public function getResponse(Request $request)
    {
        $msg = $request->input('message');
        $apiKey = env('CHATGPT_API_KEY');
        $client = new Client([
            'verify' => false,
        ]);

        $message = '
            USER MESSAGE: I want agaming PC under 1k$

            Create a PC build related to user need take prices live from the marketplace and recommend the best fit for his requirements
            RETURN DATA IN A JSON FORMAT. AND RETURN ONLY THE JSON. INCLUDE EVERY NECCESATY PC PART necesary like case, fans, and so on

            THERE SHOULD ALL COMPONENTS TO BUILD A PC HAVING NOTHING
            ';

        $chatGptResponse  = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-4-0125-preview',
                'response_format' => ["type" => "json_object" ],
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => $message//$request->input('message')
                    ],
                ],
                'max_tokens' => 150,
            ],
        ]);


        $chatGptData = json_decode($chatGptResponse->getBody(), true);


        return response()->json([
            'chat_gpt_response' => $chatGptData,
        ]);
    }
}
