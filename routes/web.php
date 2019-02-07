<?php


Route::middleware(['web'])->group(function(){

Route::namespace('Daikazu\SimpleContactForm\Http\Controllers')->group(function(){
    Route::post('simple-contact-form', 'SimpleContactFormController@store');


});
});
