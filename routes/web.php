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

Route::get( '/', function() {
    return view( 'pages' );
} );

Route::get( '/{template}', function( $template ) {
    $template = 'pages.' . $template;

    if( ! View::exists( $template ) ) {
        abort( 404 );
    }

    return view( $template );
} )
     ->name( 'templates' );

