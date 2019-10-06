<?php

Route::group(['prefix' => '/hotel'], function () {
		Route::get('/index', 'bt646Controller@showAll')->name('showAll');

		Route::get('/view', 'bt646Controller@showDetail')->name('showDetail');
	});