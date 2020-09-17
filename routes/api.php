<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Video\{VideoManageController, VideoRetrieveController, VideoSocialController};
use App\Http\Controllers\Comment\{CommentManageController, CommentRetrieveController, CommentSocialController};
use App\Http\Controllers\Channel\{ChannelManageController, ChannelRetrieveController, ChannelSocialController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('search', [SearchController::class, 'getSearchResults']);
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

Route::prefix('video')->group(function () {
    Route::get('overview', [VideoRetrieveController::class, 'getVideoOverviews']);
    Route::get('{id}', [VideoRetrieveController::class, 'getVideo']);

    Route::middleware('auth')->group(function () {
        Route::post('{id}/like', [VideoSocialController::class, 'like']);
        Route::post('{id}/unlike', [VideoSocialController::class, 'unlike']);
        Route::post('{id}/dislike', [VideoSocialController::class, 'dislike']);
        Route::post('{id}/undislike', [VideoSocialController::class, 'undislike']);
    });
});

Route::prefix('comment')->group(function () {
    Route::get('{id}/{offset}', [CommentRetrieveController::class, 'getVideoComments']);
    Route::get('{id}', [CommentRetrieveController::class, 'getComment']);

    Route::middleware('auth')->group(function () {
        Route::post('add/{id}', [CommentManageController::class, 'add']);
        Route::post('{id}/edit', [CommentManageController::class, 'edit']);
        Route::post('{id}/delete', [CommentManageController::class, 'delete']);
        Route::post('{id}/answer', [CommentSocialController::class, 'answer']);
        Route::post('{id}/like', [CommentSocialController::class, 'like']);
        Route::post('{id}/unlike', [CommentSocialController::class, 'unlike']);
        Route::post('{id}/dislike', [CommentSocialController::class, 'dislike']);
        Route::post('{id}/undislike', [CommentSocialController::class, 'undislike']);
    });
});

Route::prefix('channel')->group(function () {
    Route::get('{id}', [ChannelRetrieveController::class, 'getChannelOverview']);
    
    Route::middleware('auth')->group(function () {
        Route::get('subscribed', [ChannelRetrieveController::class, 'getUserSubscriptions']);
        Route::post('{id}/subscribe', [ChannelSocialController::class, 'subscribe']);
        Route::post('{id}/unsubscribe', [ChannelSocialController::class, 'unsubscribe']);
        Route::post('{id}/create', [ChannelManageController::class, 'create']);
        Route::post('{id}/delete', [ChannelManageController::class, 'delete']);
    });
});