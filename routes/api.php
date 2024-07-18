<?php

use App\Http\Controllers\PostsApi;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/posts',[PostsApi::class,'index']);


Route::post('/posts',[PostsApi::class,'store']);

Route::put('/posts/{post}',function(Post $post){
    $post ->update([
        'Content' => request('Content')
    ]);

    return response()->json($post , 200 );
});



Route::delete('/posts/{post}',function(Post $post){
    $secc = $post->delete();

    return response()->json($secc , 200 );
});