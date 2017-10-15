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

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

Route::get('knowledge', function() {
    return view('knowledge');
});

Route::get('knowledge_sheet', function() {
    return view('knowledge_sheet');
});

Route::get('webboard', function() {
    return view('webboard');
});

Route::get('new_topic', function() {
    return view('new_topic');
});

Route::get('basket', function() {
    return view('basket');
});

Route::get('course_information', function() {
    return view('course_information');
});

Route::get('courseEtc', function() {
    return view('courseEtc');
});

Route::get('courseM1', function() {
    return view('courseM1');
});

Route::get('courseM4', function() {
    return view('courseM4');
});

Route::get('courseP1', function() {
    return view('courseP1');
});

Route::get('courseP4', function() {
    return view('courseP4');
});

Route::get('courseUniversity', function() {
    return view('courseUniversity');
});

Route::get('payment', function() {
    return view('payment');
});

Route::get('teacher_panel', function() {
    return view('teacher_panel');
});

Route::get('topic', function() {
    return view('topic');
});
