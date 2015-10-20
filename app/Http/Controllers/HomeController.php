<?php namespace Businessempresarial\Http\Controllers;

use Businessempresarial\Category;
use Businessempresarial\Edition;
use Businessempresarial\Note;
use Illuminate\Support\Facades\DB;

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
		$categories= Category::all();
		//$edition = C::
		$notes = Note::with('category')->get();
		//$edition=Edition::max('number')->get();
		//$edition=DB::table('editions')->max('id');
		//$edition = Edition::where('number', '=','(select max(number) from editions)')->get();
		$sql = "SELECT * FROM editions e  where number = (select max(number) from editions)";
		$edition = DB::select($sql);

		//return $notes;


		//dd($notes->get(1));
		//dd($notes);
		//dd($categories);
		dd($edition);
		//$notes = [$note];
		return view('home',['notes'=>$notes,'categories'=>$categories,'edition'=>$edition]);
	}

}
