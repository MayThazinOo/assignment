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

Route::get('/', 'InquiryController@showEntryInputSelect')->name('inquiry.input');

Route::post('/confirm', 'InquiryController@showInquiryConfirmation')->name('inquiry.confirm');

Route::post('/complete', 'InquiryController@showInquiryComplete')->name('inquiry.complete');

Route::get('/backward', 'InquiryController@inquiryBackward')->name('inquiry.backward');
