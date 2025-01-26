<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;


class ApiYoutubeController extends Controller
{
    public function getLatestVideos($channel_id)
    {
        $apiKey = env('YOUTUBE_API_KEY');
        $apiUri = env("YOUTUBE_API_URI", 'https://www.googleapis.com/youtube/v3');


        $url = "$apiUri/search?channelId=$channel_id&order=date&part=snippet&maxResults=2&key=$apiKey";

        $client = new Client();

        try {

            $response = $client->get($url);
            $data = json_decode($response->getBody()->getContents(), true);

            if (empty($data['items'])) {
                return response()->json(['error' => 'No videos found or invalid channel_id'], 404);
            }


            $videos = collect($data['items'])->map(function ($item) {
                return [
                    'title' => $item['snippet']['title'],
                    'published_at' => $item['snippet']['publishedAt'],
                    'url' => 'https://www.youtube.com/watch?v=' . $item['id']['videoId'],
                ];
            });

            return response()->json(['videos' => $videos]);
        } catch (RequestException $e) {
            return response()->json(['error' => 'Failed to fetch data from YouTube API', 'message' => $e->getMessage()], 500);
        }
    }
}
