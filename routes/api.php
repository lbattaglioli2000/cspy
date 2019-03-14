<?php

use Illuminate\Http\Request;

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

<<<<<<< HEAD
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/python/run', function (Request $request){

    $temp = tmpfile();

    $code = $request->code;

    fwrite($temp, $code);

    $command = stream_get_meta_data($temp);
    $path = $command['uri'];

    $result = shell_exec('python3 ' . $path);

    fclose($temp); // this removes the file

    return response()->json([
        'status' => '200',
        'result' => $result
    ]);
});
=======
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
