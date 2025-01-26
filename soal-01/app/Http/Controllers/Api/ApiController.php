<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


class ApiController extends Controller
{
    public function getChannelStatus($channel_id)
    {
        try {
            return response()->json([
                'channel_id' => $channel_id,
                'status' => 'success',
            ]);
        } catch (\Throwable $error) {
            report($error);

            return false;
        }
    }
}
