<?php

Route::group([
    'namespace' => 'Ntwklr\Shariff\Http\Controllers',
    'as' => 'shariff.',
    'middleware' => ['web']
], function () {
    Route::get(config('shariff.url'), [
        'uses' => 'ShariffController@backend',
        'as' => 'backend',
    ]);
});