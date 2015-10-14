<?php namespace Businessempresarial\Http\Controllers;

use Businessempresarial\Note;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/



	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		//$notes = Note::all();
		$notes = Note::with('category')->get();
		//return $notes;


		//dd($notes->get(1));
		//dd($notes);

		//$notes = [$note];
		return view('home',['notes'=>$notes]);
	}

}
