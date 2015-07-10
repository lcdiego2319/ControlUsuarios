<?php namespace App\Http\Controllers\Estaciones;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LabelPrinter as LabelPrinter;
use Illuminate\Http\Request;
use Auth;
use App\Historial as Historial;
class LabelPrinterController extends Controller {
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
		$rows = LabelPrinter::SerialNumber($request->get('SerialNumber'))->paginate(50);
		return view('admin.estaciones.labelPrinter',compact('rows'));
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
		//
		$label = LabelPrinter::findOrFail($id);
		$label->delete();
		$message = $label->SerialNumber.' fue eliminado.';

		$tableName = LabelPrinter::TableName();
		if (Auth::user())
        {
        	$currentUser = Auth::user();
			$historial = Historial::create(['usuario'=>$currentUser->usuario,'anterior'=>$object->SerialNumber,'nuevo'=>'Eliminado','campo'=>'Todos','tabla'=>$tableName]);
        }else{
        	dd("no hay iniciada sesion");
        }


		if($request->ajax()){
			return response()->json([
				'id' => $label->SerialNumber,
				'message' => $message
			]);
		}
		return redirect()->route('estaciones.labelPrinter.index');
		//dd("entro al controlador");
	}

}
