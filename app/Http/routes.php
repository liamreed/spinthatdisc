<?php

Route::get('/', ['as' => 'home_path', 'uses' => function () {
    return view('home');
}]);

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shop/{genre}', function ($genre = 'Electronic') {
    return view('shop')->with('genre', $genre);
});

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');
