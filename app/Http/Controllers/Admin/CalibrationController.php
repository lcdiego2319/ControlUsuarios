<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Calibration as Calibration;
use Auth;
use App\Historial as Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CalibrationController extends Controller {


 public function __construct()
    {
        

        $this->middleware('isAdmin', ['except' => ['index']]);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		//
		if (Auth::user())
       {
           $currentUser = Auth::user();
		}

		$rows = Calibration::SerialNumber($request->get('SerialNumber'))->paginate();
		
	Session::flash('message', "Calibration Station");
		if($currentUser->tipo == 'admin'){

		return view('admin.usuario.calibration',compact('rows'));
		}else{
			return view('admin.guest.calibration',compact('rows'));
		}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		dd("create admin");
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
	public function destroy($id)
	{
		//
	}

	public function postFields(Request $request)
	{
		$calibration = Calibration::findOrFail($request->Transaction);
		$columna = $request->columna;
		$tableName = Calibration::TableName();
	
		if (Auth::user())
        {
        	$currentUser = Auth::user();
			$historial = Historial::create(['usuario'=>$currentUser->usuario,'anterior'=>$calibration->$columna,'nuevo'=>$request->valor,'campo'=>$request->columna,'tabla'=>$tableName]);
        }else{
        	dd("no hay iniciada sesion");
        }
		
		$calibration->fill(\Request::only($request->columna));//request->columna contiene el nombre de la columan que se desea cambiar
		$id = $request->id;
		$calibration->save();
		Session::flash('message', "Los cambios han sido guardado.");
		if($request->ajax()){
			return response()->json([
					'id' => $id, 
					'nombre' => $calibration->nombre,				
					'message' => "ESTO FUNCIONO BIEN"
				]);	
		}
	}
}
