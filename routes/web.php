<?php


#shop

Route::prefix('shop')->group(function () {
Route::get('/','ShopController@categories');
Route::get('cart','ShopController@cart' );
Route::get('order-now','ShopController@orderNow' );
Route::get('clear-cart','ShopController@clearCart' );
Route::get('add-to-cart','ShopController@addToCart' );
Route::get('update-cart','ShopController@updateCart' );
Route::get('remove-item/{pid}','ShopController@removeItem' );
Route::get('{curl}','ShopController@products');
Route::get('{curl}/{purl}','ShopController@item');


});

#User

Route::prefix('user')->group(function () {
  Route::middleware(['signedguard'])->group(function () {
    Route::get('signin','UserController@getSignin');
    Route::post('signin','UserController@postSignin');
    Route::get('signup','UserController@getSignup');
    Route::post('signup','UserController@postSignup');
  
});
Route::get('logout','UserController@logout');

  
    });

    #Cms

Route::prefix('cms')->group(function () {
  Route::middleware(['cmsguard'])->group(function () {
    Route::get('dashboard','CmsController@dashboard');
    Route::get('orders','CmsController@orders');
    Route::resource('menu', 'MenuController');
    Route::resource('content', 'ContentController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    Route::resource('users', 'AccountController');



  
}); 
    });


#pages 


Route::get('/','PagesController@home' );
Route::get('{url}','PagesController@content' );
