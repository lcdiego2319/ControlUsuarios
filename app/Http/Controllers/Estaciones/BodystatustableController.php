<?php namespace App\Http\Controllers\Estaciones;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bodystatustable as Bodystatus;
use Illuminate\Http\Request;
use App\Historial as Historial;
use Illuminate\Support\Facades\Session;
use Auth;
class BodystatustableController extends Controller {

	public function __construct(){
		$this->middleware('isAdmin', ['only' => ['destroy']]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		///dd($request->get('SerialNumber'));
		$rows = Bodystatus::SerialNumber($request->get('SerialNumber'))->paginate(30);//SerialNumber manda llamar a la funcion scopeSerialNumber del modelo.
		
		//
		//dd($body);
		//$bodystatus = Bodystatus::
		//Session::flash('message', "Body Status Table");
		return view('admin.estaciones.bodystatus',compact('rows'));
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
	public function show($id)
	{
		//
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
	public function destroy($id,Request $request)
	{
		$object= Bodystatus::findOrFail($id);
		$object->delete();
		$message = $object->SerialNumber.' fue eliminado.';
		$tableName = Bodystatus::TableName();
		if (Auth::user())
        {
        	$currentUser = Auth::user();
			$historial = Historial::create(['usuario'=>$currentUser->usuario,'anterior'=>$object->SerialNumber,'nuevo'=>'Eliminado','campo'=>'Todos','tabla'=>$tableName]);
        }else{
        	dd("no hay iniciada sesion");
        }

		if($request->ajax()){
			return response()->json([
				'id' => $object->SerialNumber,
				'message' => $message
			]);
		}
		return redirect()->route('estaciones.bodystatus.index');
	}

}
