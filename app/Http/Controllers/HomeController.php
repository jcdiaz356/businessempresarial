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
		//$categories= Category::all();
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::

		$edition=Edition::where('state','=','1')
			->max('number');
		$edition = Edition::where('number' ,'=', $edition)
			->where('state','=','1')
			->get();
		//$notes = Note::where('edition_id', '=', $edition->id)->get();
		//$notes = Note::with('medias')->get();
		//$notes = Note::where('edition_id', '=', $edition->id)->where('category_id','=','1')->get();
		$notesCompany = Note::where('edition_id', '=', $edition[0]->id)
			->where('category_id','=','1')
			->where('state','=','1')
			->orderBy('order','ASC')
			->take(5)
			->get();

		$notesReleases = Note::where('edition_id', '=', $edition[0]->id)
			->where('category_id','=','2')
			->where('state','=','1')
			->orderBy('order','ASC')
			->take(5)
			->get();



//		$notesInterview = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','3')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(5)
//			->get();

//		$notesInterview = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','3')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(5)
//			->get();
		$notesInterview = Note::where('edition_id', '=', $edition[0]->id)
			->where('category_id','=','3')
			->where('state','=','1')
			->orderBy('order','ASC')
			->take(1)
			->whereHas('medias', function($q){
							$q->where('state','=', 1);
						})->get();

		$notesSuccessStories = Note::where('edition_id', '=', $edition[0]->id)
			->where('category_id','=','3')
			->where('state','=','1')
			->orderBy('order','ASC')
			->take(1)
			->whereHas('medias', function($q){
							$q->where('state','=', 1);
						})->get();



//		$notesInterview = DB::table('Notes')
//			->join('media','media.note_id','=','notes.id')
//			->where('media.state', 1)
//			->get();
		//$notes = Note::where('edition_id', '=', $edition[0]->id )->where('state','=','1')->orderBy('order','ASC')->take(3)->get();
////
		$conunt =0;
		foreach ($notesCompany as $note)
		{
			if($conunt==0){
				$note_id = $note->id;
				$active =[
					"note_id"=>$note->id,
					"active" =>"true"
				];
			}
			$conunt ++;
		}

		$active = (object) $active;


//		$notes = Note::with(['media' => function($query)
//		{
//			$query->where('title', 'like', '%first%');
//
//		}])->get();

		//$edition=DB::table('editions')->max('id');
		//$edition = Edition::where('number', '=','424')->get();
		//$notes = Note::where('edition_id', '=', $edition->id )->get();

		//$sql = "SELECT * FROM editions e  where number = (select max(number) from editions)";
		//$edition = DB::select($sql);

		//$edition = Edition::with('notes')->get();

//		$users = User::with(['posts' => function($query)
//		{
//			$query->where('title', 'like', '%first%');
//
//		}])->get();
		//return $notes;
		//dd($notes->get(1));
		//dd($edition);
		//dd($active);
		//dd($notesInterview);
		//dd($edition);
		//$notes = [$note];
		//return view('home',['notes'=>$notes,'categories'=>$categories,'edition'=>$edition]);
		return view('home',[
			'edition'		=>		$edition,
			'notesCompany'	=>		$notesCompany ,
			'active'		=>		$active,
			'notesReleases'	=>		$notesReleases,
			'notesInterview'=>	$notesInterview
		]);
	}

}
