<?php

use Illuminate\Http\Request;

// ここはコメントアウト
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// この行を追加
Route::post('/like', 'ReactionController@create');