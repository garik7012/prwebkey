<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');
//Route::get('/test', 'IndexController@test');
Auth::routes();

Route::get('/services', 'ServicesController@index');
Route::get('/keises', 'IndexController@keises');
Route::get('/clients', 'IndexController@clients');
Route::get('/business', 'IndexController@business');
Route::get('/contacts', 'IndexController@contacts');
//chat
//Route::get('');
//orders
Route::post('/order', 'OrderController@sendOrder');
Route::post('/order/aside', 'OrderController@sendAsideOrder');
Route::post('/order/order', 'OrderController@order');
Route::post('/order/publicsmi', 'OrderController@publicSmi');
//blog
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@showArticle');
//services
Route::get('/services/search-optimisation', 'ServicesController@searchOptim');
Route::get('/services/reputation', 'ServicesController@reputation');
Route::get('/services/internet-reklama', 'ServicesController@internet');
Route::get('/services/smm', 'ServicesController@smm');
Route::get('/services/copywriting', 'ServicesController@copywriting');
Route::get('/services/videomaking', 'ServicesController@videomaking');
Route::get('/services/lidogen', 'ServicesController@lidogen');
Route::get('/services/konsalting', 'ServicesController@konsalting');
Route::get('/services/smi', 'ServicesController@smi');
//services so
Route::get('/services/search-optimisation/audit', 'ServicesController@soAudit');
Route::get('/services/search-optimisation/prodvigenie', 'ServicesController@soProdvigenie');
Route::get('/services/search-optimisation/education', 'ServicesController@soEducation');
//services internet reklama
Route::get('/services/internet-reklama/kontekst', 'ServicesController@kontekstAdword');
//Route::get('/services/kontekst-reklama/agregator', 'ServicesController@kontekstAgregator');
Route::get('/services/internet-reklama/soc', 'ServicesController@kontekstSoc');
Route::get('/services/internet-reklama/target', 'ServicesController@kontekstTarget');
//services reputation
Route::get('/services/reputation/serm', 'ServicesController@reputationSerm');
Route::get('/services/reputation/negative', 'ServicesController@reputationNegative');
Route::get('/services/reputation/monitoring', 'ServicesController@reputationMonitoring');
//services lidogen
Route::get('/services/lidogen/parsing', 'ServicesController@lidogenParsing');
//services copyr
Route::get('/services/copywriting/napolnenie', 'ServicesController@copywritingNapolnenie');
Route::get('/services/copywriting/public', 'ServicesController@copywritingPublic');
Route::get('/services/copywriting/reklam', 'ServicesController@copywritingReklam');
//services smm
Route::get('/services/smm/blogers', 'ServicesController@smmBlogers');
Route::get('/services/smm/video', 'ServicesController@smmVideo');
Route::get('/services/smm/wiki', 'ServicesController@smmWiki');
//services smi
Route::get('/services/smi/public', 'ServicesController@smiPublic');
Route::get('/services/smi/jurn', 'ServicesController@smiJurn');
Route::get('/services/smi/blokir', 'ServicesController@smiBlokir');
//services videomaking
Route::get('/services/videomaking/etaps', 'ServicesController@videomakingEtaps');
Route::get('/services/videomaking/price', 'ServicesController@videomakingPrice');
//services pr konsalting
Route::get('/services/konsalting/monitoring', 'ServicesController@konsaltingMonitoring');
Route::get('/services/konsalting/modelirovanie', 'ServicesController@konsaltingModelirovanie');