<?php

route::get('/', function () {
	return view('welcome');
});

Route::resource('tugas', 'TugasController');