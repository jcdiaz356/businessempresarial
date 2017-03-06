<?php namespace Businessempresarial\Http\Controllers;

use Businessempresarial\Category;
use Businessempresarial\Edition;
use Businessempresarial\Http\Requests;
use Businessempresarial\Http\Controllers\Controller;

use Businessempresarial\Note;
use Illuminate\Http\Request;

class CategoriesController extends Controller {

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
	public function show($edition_id,$id)
	{
		//
		$categories= Category::orderBy('order','ASC')
			->where('state','=','1')
			->get();

		$activeMenu = $id;
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::
		$edition = Edition::where('id' ,'=', $edition_id)
			->where('state','=','1')
			->get();

		$notes = Note::orderBy('order','ASC')
			->where('edition_id' ,'=', $edition_id)
			->where('category_id' ,'=', $id)
			->with('category')
			->whereHas('medias', function($q){
				$q->where('state','=', 1);
			})
			->paginate(15);

		return view('category',[
			'edition'		=>		$edition,
			'categories'	=>		$categories,
			'notes'			=>		$notes,
			'activeMenu'	=>		$activeMenu
		]);
	}

	public function showEditionsPrevious($edition_id,$id)
	{
		//
		$categories= Category::orderBy('order','ASC')
			->where('state','=','1')
			->get();

		$activeMenu = $id;
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::
		$edition = Edition::where('id' ,'=', $edition_id)
			->where('state','=','1')
			->get();

		$notes = Note::where('edition_id' ,'=', $edition_id)
			->where('category_id' ,'=', $id)
			->with('category')
			->whereHas('medias', function($q){
				$q->where('state','=', 1);
			})
			->paginate(15);

		return view('categoryEditionPrevious',[
			'edition'		=>		$edition,
			'categories'	=>		$categories,
			'notes'			=>		$notes,
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
