<?php namespace App\Http\Controllers\Estaciones;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FinalTestStation4b as FinalTestStation4b;
use Illuminate\Http\Request;
use Auth;
use App\Historial as Historial;
class FinalTestStation4bController extends Controller {
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
		$rows = FinalTestStation4b::SerialNumber($request->get('SerialNumber'))->paginate(30);
		return view('admin.estaciones.finalTestStation4b',compact('rows'));
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
		public function destroy($id, Request $request)
	{
		$object= FinalTestStation4b::findOrFail($id);
		$object->delete();
		$message = $object->SerialNumber.' fue eliminado.';
		$tableName = FinalTestStation4b::TableName();
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
		return redirect()->route('estaciones.finalTestStation1.index');
	}

}
