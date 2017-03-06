<?php namespace Businessempresarial\Http\Controllers;

use Businessempresarial\Category;
use Businessempresarial\Edition;
use Businessempresarial\Http\Requests;
use Businessempresarial\Http\Controllers\Controller;
use Businessempresarial\Note;
use Illuminate\Http\Request;

class EditionsController extends Controller {
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
	public function editionsPrevious($edition_id,$category_id)
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
		$editionsPrevious = Edition::orderBy('number','DESC')
			->where('state','=','1')
			->paginate(15);;


		//return $note;
		return view('edicionesAnteriores',[
			'edition'		=>		$edition,
			'categories'	=>		$categories,
			'editionsPrevious'	=>		$editionsPrevious,
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
