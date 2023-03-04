<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/Post',function (){
//     return Post::all();
// });
Route::get('/Post',[PostController::class,'index']);
// Route::post('/Posts',function(){
//     request()->validate([
//         'title'=>'required',
//         'content'=>'required',
//     ]);
//    return Post::create([
//      'title'=>request('title'),
//      'content'=>request('content'),

//    ]);
// });
Route::post('/Posts',[PostController::class,'create']);
Route::put('/Posts/{post}',[PostController::class,'update']);

//  Route::Put('/Posts/{post}',function(Post $post){
//     request()->validate([
//         'title'=>'required',
//         'content'=>'required',
//     ]);
//     $success=$post->update([
//         'title'=>request('title'),
//         'content'=>request('content')
   
//       ]);
//       return [
//         'success'=>$success
//     ];
//  });
Route::delete('/Posts/{post}',[PostController::class,'destroy']);
// Route::delete('/Posts/{id}',function (Post $post){
//     $success=$post->delete();
//     return [
//         'success'=>$success
//     ];
// })
?>
