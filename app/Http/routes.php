<?php

Route::group(['middleware' => ['web']], function () {

	Route::get('DailyProduction',['as'=>'pc.DailyProduction','uses'=>'PagesController@getDailyProduction']);

	Route::get('Productions',['as'=>'pc.Productions','uses'=>'PagesController@getProductions']);

	Route::get('Attendance',['as'=>'pc.Attendance','uses'=>'PagesController@getAttendance']);

	Route::get('CompactDetails',['as'=>'pc.CompactDetails','uses'=>'PagesController@getCompactDetails']);

	Route::get('PurchaseDetails',['as'=>'pc.PurchaseDetails','uses'=>'PagesController@getPurchaseDetails']);

	Route::get('TradingDetails',['as'=>'pc.TradingDetails','uses'=>'PagesController@getTradingDetails']);

	Route::get('/',['as'=>'pc.Home','uses'=>'PagesController@getIndex']);

	Route::resource('dailyproductions','DailyProductionsController');

	Route::resource('compact','CompactController');
});

