// review
Route::get('/review', $controller_path . '\Pages\ReviewController@review_page');
Route::post('/add_review', $controller_path . '\Pages\ReviewController@add_review');
Route::get('/delete_review/{id}',$controller_path . '\Pages\ReviewController@delete_review');
Route::get('/update_review/{id}',$controller_path . '\Pages\ReviewController@update_review');
Route::post('/update_review_confirm/{id}',$controller_path . '\Pages\ReviewController@update_review_confirm');
