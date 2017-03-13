<?php

Route::get('/', ['as' => 'home_path', 'uses' => function () {
    return view('home');
}]);

# LOGIN / REGISTER / LOGOUT & PASSWORD ROUTES

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/shop', function () {
    return view('shop');
});

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::get('/shop/{genre}', function ($genre = 'Electronic') {
    return view('shop')->with('genre', $genre);
});


# CART / WISHLIST ROUTES
Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');
Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');
