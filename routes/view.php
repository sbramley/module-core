<?php

Route::group(['namespace' => 'TMS\Common\Controllers'], function()
{
    Route::get('users', ['uses' => 'UserController@show']);
});

