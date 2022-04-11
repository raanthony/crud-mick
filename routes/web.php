<?php


Route::get('/listPr',[
    'as'=>'listPr',
    'uses'=>'LinkController@listProduct',
    'middleware'=>'auth'
]);
Route::get('/addPr',[
    'as'=>'addPr',
    'uses'=>'LinkController@addProduct',
]);
Route::get('/deletePr/{id}',[
    'as'=>'deletePr',
    'uses'=>'LinkController@deleteProduct',
]);
Route::match(['get','post'],'/updatePr/{id}',[
    'as'=>'updatePr',
    'uses'=>'LinkController@updateProduct',
]);

Route::post('/PrList',[
    'as'=>'prList',
    'uses'=>'LinkController@validProduct',
]);


// list des routes admin

Route::middleware(['auth'])->group(function () {

    Route::group(array(
        'prefix' => '/admin',
        'namespace' => 'Admin',
        //'middleware' => [App\Http\Middleware\Authenticate::class,HTMLMin\HTMLMin\Http\Middleware\MinifyMiddleware::class],
        'middleware' => [App\Http\Middleware\Authenticate::class],
        'as' => 'admin::'
    ), function () {
        Route::resource('products', 'AdminProductController');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
