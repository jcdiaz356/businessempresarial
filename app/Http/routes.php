<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
                    'uses'  => 'HomeController@index',
                    'as'    => 'home'
                ]);



Route::get('edition/{edition_id}/category/{category_id}/contact', [
                            'as' => 'contact',
                            'uses' => 'HomeController@contact']);

//Route::get('notes/{id}','NotesController@show');
Route::get('edition/{edition_id}/category/{category_id}/notes/{id}',[
                            'uses'  =>  'NotesController@show',
                            'as'    =>  'note_show_path'
                        ]);

Route::get('edition/{edition_id}/category/{id}',[
                            'uses'  =>  'CategoriesController@show',
                            'as'    =>  'category_show_path'
                        ]);



Route::get('edition/{edition_id}/category/{id}/publicationsAgenda',[
                            'uses'  =>  'NotesController@publicationsAgenda',
                            'as'    =>  'note_publication_agenda_show_path'
                        ]);

Route::get('edition/{edition_id}/category/{id}/video',[
                            'uses'  =>  'HomeController@video',
                            'as'    =>  'video_show_path'
                        ]);

Route::get('edition/{edition_id}/category/{id}/edicionesAnteriores',[
                            'uses'  =>  'EditionsController@editionsPrevious',
                            'as'    =>  'note_editions_anteriores_show_path'
                        ]);

Route::get('edition/search/{edition_id}',[
                            'uses' => 'NotesController@search',
                            'as' => 'note_search_show_path'


                        ]);
// ------------------- Route edition previous -------------------------------------
Route::get('editionsPrevious/edition/{edition_id}',[
    'uses'  => 'HomeController@editionsPrevious',
    'as'    => 'home_editions_previous'
]);

Route::get('editionsPrevious/edition/{edition_id}/category/{id}',[
    'uses'  =>  'CategoriesController@showEditionsPrevious',
    'as'    =>  'category_show_path_editions_previous'
]);

Route::get('editionsPrevious/edition/{edition_id}/category/{category_id}/notes/{id}',[
    'uses'  =>  'NotesController@showEditionsPrevious',
    'as'    =>  'note_show_path_editions_previous'
]);

Route::get('editionsPrevious/edition/{edition_id}/category/{id}/publicationsAgenda',[
    'uses'  =>  'NotesController@publicationsAgendaEditionsPrevious',
    'as'    =>  'note_publication_agenda_show_path_editions_previous'
]);


Route::get('edicion/{edition_id}/articulo/{id}',[
    'uses'  => 'HomeController@index',
    'as'    => 'home'
]);



//Route::get('{name}','NotesController@show');
// ------------------- Route export excel -------------------------------------

Route::resource('excel','ExcelController');

