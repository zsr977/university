<?php
//路由组限制只能get访问
Route::group(['method'=>'get'],function(){
	Route::rule('/[:url]','index/index/index');
});

//静态资源路由规则
Route::get('static',response('error : resource not found!','404',['error','resource not found!']) -> contentType('text/plain'));

//未定义路由默认跳转到404页面
Route::miss('index/index/miss');

//二级域名www.domain，用于pc端
Route::domain('www',function(){
	//路由组限制只能get访问
	Route::group(['method'=> 'get'],function(){
		Route::rule('/[:url]','index/index/index');
	});

	//静态资源路由规则
	Route::get('static',response('error : resource not found!','404',['error','resource not found!'])->contentType('text/plain'));

	//未定义路由默认跳转到404页面
	Route::miss('index/index/miss');
});

//二级域名mobile.domain，用于移动端
 Route::domain('mobile',function(){
 	//路由组限制只能get访问
 	Route::group(['method' => 'get'],function(){
 		Route::rule('/[:url]','index/index/mobile');
 	});

 	//静态资源路由规则
 	Route::get('static',response('error : resource not found!','404',['error','resource not found!']) -> contentType('text/plain'));

 	//未定义路由默认跳转到404页面
 	Route::miss('index/index/miss');
 });

 //二级域名api.domain，用于api
 Route::domain('api',function(){
 	//路由限制只能post访问
 	Route::group(['method' => 'post'],function(){

 	});

 	//静态资源路由规则
 	Route::get('static',response('error : resource not found!','404',['error','resource not found!']) -> contentType('text/plain'));

 	//未定义路由默认跳转到404页面
 	Route::miss('index/index/miss');

 });








