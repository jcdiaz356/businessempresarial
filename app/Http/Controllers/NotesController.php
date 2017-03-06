<?php namespace Businessempresarial\Http\Controllers;

use Businessempresarial\Category;
use Businessempresarial\Edition;
use Businessempresarial\Http\Requests;
use Businessempresarial\Http\Controllers\Controller;

use Businessempresarial\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NotesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($edition_id,$category_id,$id)
	{
		//

		$categories= Category::orderBy('order','ASC')
			->where('state','=','1')
			->get();
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::
		$activeMenu = $category_id;

		$edition = Edition::where('id' ,'=', $edition_id)
			->where('state','=','1')
			->get();

		$note = Note::with('category')
					->whereHas('medias', function($q){
							$q->where('state','=', 1);
						})
					->find($id);
		//return $note;
		return view('note',[
							'edition'		=>		$edition,
							'categories'	=>		$categories,
							'note'			=>		$note,
							'activeMenu'	=>		$activeMenu
							]);


	}

	public function showEditionsPrevious($edition_id,$category_id,$id)
	{
		//

		$categories= Category::orderBy('order','ASC')
			->where('state','=','1')
			->get();
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::
		$activeMenu = $category_id;

		$edition = Edition::where('id' ,'=', $edition_id)
			->where('state','=','1')
			->get();

		$note = Note::with('category')
			->whereHas('medias', function($q){
				$q->where('state','=', 1);
			})
			->find($id);
		//return $note;
		return view('noteEditionPrevious',[
			'edition'		=>		$edition,
			'categories'	=>		$categories,
			'note'			=>		$note,
			'activeMenu'	=>		$activeMenu
		]);


	}

	public function publicationsAgenda($edition_id,$category_id)
	{
		//

		$categories= Category::orderBy('order','ASC')
			->where('state','=','1')
			->get();
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::
		$activeMenu = $category_id;

		$edition = Edition::where('id' ,'=', $edition_id)
			->where('state','=','1')
			->get();

		$publications = Note::with('category')
			->whereHas('medias', function($q){
				$q->where('state','=', 1);
			})
			->where('state','=','1')
			->where('edition_id','=',$edition_id)
			->where('category_id','=','14')
			->get();

		$agendas = Note::with('category')
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
			->where('state','=','1')
			->where('edition_id','=',$edition_id)
			->where('category_id','=','10')
			->get();
		//return $note;
		//dd($agendas);
		return view('agendaPublication',[
			'edition'		=>		$edition,
			'categories'	=>		$categories,
			'publications'	=>		$publications,
			'agendas'		=>		$agendas,
			'activeMenu'	=>		$activeMenu
		]);


	}


	public function publicationsAgendaEditionsPrevious($edition_id,$category_id)
	{
		//

		$categories= Category::orderBy('order','ASC')
			->where('state','=','1')
			->get();
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::
		$activeMenu = $category_id;

		$edition = Edition::where('id' ,'=', $edition_id)
			->where('state','=','1')
			->get();

		$publications = Note::with('category')
			->whereHas('medias', function($q){
				$q->where('state','=', 1);
			})
			->where('state','=','1')
			->where('edition_id','=',$edition_id)
			->where('category_id','=','14')
			->get();

		$agendas = Note::with('category')
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
			->where('state','=','1')
			->where('edition_id','=',$edition_id)
			->where('category_id','=','10')
			->get();
		//return $note;
		//dd($agendas);
		return view('agendaPublicationEditionPrevious',[
			'edition'		=>		$edition,
			'categories'	=>		$categories,
			'publications'	=>		$publications,
			'agendas'		=>		$agendas,
			'activeMenu'	=>		$activeMenu
		]);


	}

	public function search($edition_id)
	{
		//
		//$getValuePost= Input::all();
		$getValuePost=Input::get('textsearch');

		$categories= Category::orderBy('order','ASC')
			->where('state','=','1')
			->get();
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::
		$activeMenu = "0";

		$edition = Edition::where('id' ,'=', $edition_id)
			->where('state','=','1')
			->get();
		$textSearch=$getValuePost;
		//$textSearch=$key;

		$notesSearch = Note::with('category')
			->whereHas('medias', function($q){
				$q->where('state','=', 1);
			})
			->where('state','=','1')
			->where('content','like','%' . $textSearch . '%')
			->get();

		//dd($noteSearch);
		//return $note;
		return view('search',[
			'edition'		=>		$edition,
			'categories'	=>		$categories,
			'notesSearch'	=>		$notesSearch,
			'activeMenu'	=>		$activeMenu
		]);


	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
