<?php

Route::get('/', 'FrontendController@Index');
Route::get('login', 'FrontendController@Login');
Route::post('login', 'FrontendController@LoginPost');
