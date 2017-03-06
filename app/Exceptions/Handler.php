<?php namespace Businessempresarial\Exceptions;

use Businessempresarial\Category;
use Businessempresarial\Edition;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler {

	/**
	 * A list of the exception types that should not be reported.
	 *
	 * @var array
	 */
	protected $dontReport = [
		'Symfony\Component\HttpKernel\Exception\HttpException'
	];

	/**
	 * Report or log an exception.
	 *
	 * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
	 *
	 * @param  \Exception  $e
	 * @return void
	 */
	public function report(Exception $e)
	{
		return parent::report($e);
	}

	/**
	 * Render an exception into an HTTP response.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Exception  $e
	 * @return \Illuminate\Http\Response
	 */
	public function render($request, Exception $e)
	{

		//$notes = Note::all();
		$categories= Category::orderBy('order','ASC')
			->where('state','=','1')
			->get();
		//$edition = C::
		//$notes = Note::with('category')->get();
		//$editionMax = Edition::
		$activeMenu = 0;

		$edition=Edition::where('state','=','1')
			->max('number');


		$edition = Edition::where('number' ,'=', $edition)
			->where('state','=','1')
			->get();
		//$notes = Note::where('edition_id', '=', $edition->id)->get();
		//$notes = Note::with('medias')->get();
		//$notes = Note::where('edition_id', '=', $edition->id)->where('category_id','=','1')->get();
//		$notesCompany = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','1')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(5)
//			->get();
//
//		$notesReleases = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','2')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(5)
//			->get();
////		$notesInterview = Note::where('edition_id', '=', $edition[0]->id)
////			->where('category_id','=','3')
////			->where('state','=','1')
////			->orderBy('order','ASC')
////			->take(5)
////			->get();
//
////		$notesInterview = Note::where('edition_id', '=', $edition[0]->id)
////			->where('category_id','=','3')
////			->where('state','=','1')
////			->orderBy('order','ASC')
////			->take(5)
////			->get();
//		$notesInterview = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','3')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(1)
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
//			->get();
//		$notesSuccessStories = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','4')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(1)
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
//			->get();
//		$notesTourismGastronomy = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','7')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(1)
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
//			->get();
//		$notesStyleBbeauty = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','11')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(1)
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
//			->get();
//		$notesSiaryPublication = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','14')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(1)
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
//			->get();
//
//		$notesMoveBusiness = Note::where('edition_id', '=', $edition[0]->id)
//			->where('category_id','=','9')
//			->where('state','=','1')
//			->orderBy('order','ASC')
//			->take(1)
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
//			->get();
//
//		$notesWeekArticle = Note::where('category_id','=','5')
//			->where('state','=','1')
//			->orderBy('id','DESC')
//			->take(5)
//			->whereHas('medias', function($q){
//				$q->where('state','=', 1);
//			})
//			->get();
//		$notesInterview = DB::table('Notes')
//			->join('media','media.note_id','=','notes.id')
//			->where('media.state', 1)
//			->get();
		//$notes = Note::where('edition_id', '=', $edition[0]->id )->where('state','=','1')->orderBy('order','ASC')->take(3)->get();
////
		//Usado para enviar un activador de las notas
//		$conunt =0;
//		foreach ($notesCompany as $note)
//		{
//			if($conunt==0){
//				$note_id = $note->id;
//				$active =[
//					"note_id"=>$note->id,
//					"active" =>"true"
//				];
//			}
//			$conunt ++;
//		}
//
//		$active = (object) $active;
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
//		return view('home',[
//			'categories'			=>		$categories,
//			'edition'				=>		$edition,
//			'notesCompany'			=>		$notesCompany ,
//			'active'				=>		$active,
//			'notesReleases'			=>		$notesReleases,
//			'notesInterview'		=>		$notesInterview,
//			'notesSuccessStories'	=>		$notesSuccessStories,
//			'notesTourismGastronomy'=>		$notesTourismGastronomy,
//			'notesStyleBbeauty'		=>		$notesStyleBbeauty,
//			'notesSiaryPublication'	=>		$notesSiaryPublication,
//			'notesMoveBusiness'		=>		$notesMoveBusiness,
//			'notesWeekArticle'		=>		$notesWeekArticle,
//			'activeMenu'			=>		$activeMenu
//		]);


//		if ( ! config('app.debug') && ! $this->isHttpException($e)) {
//			return response()->view('errors.404');
//		}

		if($this->isHttpException($e))
		{
			switch ($e->getStatusCode()) {
				// not found
				case 404:
					return \Response::view('errors.404',[
						'categories'			=>		$categories,
						'edition'				=>		$edition,
						//'notesCompany'			=>		$notesCompany ,
						//'active'				=>		$active,
//						'notesReleases'			=>		$notesReleases,
//						'notesInterview'		=>		$notesInterview,
//						'notesSuccessStories'	=>		$notesSuccessStories,
//						'notesTourismGastronomy'=>		$notesTourismGastronomy,
//						'notesStyleBbeauty'		=>		$notesStyleBbeauty,
//						'notesSiaryPublication'	=>		$notesSiaryPublication,
//						'notesMoveBusiness'		=>		$notesMoveBusiness,
//						'notesWeekArticle'		=>		$notesWeekArticle,
						'activeMenu'			=>		$activeMenu
					],404);
					break;
				// internal error
				case 500:
					return \Response::view('errors.500',array(),500);
					break;

				default:
					return $this->renderHttpException($e);
					break;
			}
		}
		else
		{
			return parent::render($request, $e);
		}

		return parent::render($request, $e);
	}

}
