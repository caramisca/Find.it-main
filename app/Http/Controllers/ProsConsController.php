<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ProsConsController extends Controller
{
    public function getResponse(Request $request) {
        $apiKey = env('CHATGPT_API_KEY');
        $client = new Client([
            'verify' => false,
        ]);
        $prompt = $request->input('message');
        // Formulate the message with clear instructions for JSON format
        $message = '
            Car Name: '.$prompt.'

            Provide 5 cons and 5 pros related to the car in the following JSON format:
            {
                "pros": ["pro1", "pro2", "pro3", "pro4", "pro5"],
                "cons": ["con1", "con2", "con3", "con4", "con5"]
            }
        ';

        try {
            $chatGptResponse = $client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo-0125',
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => $message
                        ],
                    ],
                    'max_tokens' => 150,
                ],
            ]);

            $responseBody = json_decode($chatGptResponse->getBody(), true);

            // Decode the content field which is expected to be a JSON string
            $content = json_decode($responseBody['choices'][0]['message']['content'], true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Failed to decode JSON response: ' . json_last_error_msg());
            }

            // Extract pros and cons
            $pros = $content['pros'] ?? [];
            $cons = $content['cons'] ?? [];

            return response()->json([
                'pros' => $pros,
                'cons' => $cons,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred: ' . $e->getMessage()
            ], 500);
    }
}
}
