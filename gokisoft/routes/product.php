<?php

Route::group(['prefix' => '/product'], function () {
		Route::get('/view', 'bt647Controller@showAll')->name('showAll');
	});