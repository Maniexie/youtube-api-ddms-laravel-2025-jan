<?php

use App\Http\Controllers\Api\ApiYoutubeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/youtube/videos/{channel_id}', [ApiYoutubeController::class, 'getLatestVideos']);
