<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiYoutubeController extends Controller
{
    public function getChannelStats($channel_id)
    {
        try {
            $apiKey = env('YOUTUBE_API_KEY');
            $apiUri = env("YOUTUBE_API_URI", "https://www.googleapis.com/youtube/v3");
            $url = "$apiUri/channels?part=statistics,snippet&id=$channel_id&key=$apiKey";

            $client = new Client();
            $response = $client->get($url);

            $data = json_decode($response->getBody()->getContents());

            if (empty($data->items)) {
                return response()->json(['error' => 'Channel not found'], 404);
            }

            $channel = $data->items[0];
            $statistics = $channel->statistics;

            $result = [
                'channel_name' => $channel->snippet->title,
                'subscribers' => $statistics->subscriberCount,
                'total_views' => $statistics->viewCount,
                'total_videos' => $statistics->videoCount,
            ];

            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
