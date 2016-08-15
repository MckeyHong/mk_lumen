<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

/* 取得所有使用者資料 */
$app->get('/users', function() {
    return response()->json([\App\Model\Users::all()]);
});

/* Dingo API Demo */
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', [], function ($api) {
    $api->get('stats', function(){
        return [
            'stats' => 'dingoapi is ok'
        ];
    });
});