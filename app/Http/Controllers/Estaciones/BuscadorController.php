<?php namespace App\Http\Controllers\Estaciones;

use App\Http\Requests;use DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BuscadorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		
		$estacion = $request->get('estacion');
		$serialNumber = $request->get('SerialNumber');
		if($serialNumber == ''){
			$rows = \DB::table($estacion)->paginate(15);
		}else{	
		 $rows = \DB::table($estacion)->where('SerialNumber',$serialNumber)->paginate(30);
		}

		 if($estacion == 'calibrationtable' ){
		 	return view('admin.guest.calibration',compact('rows'));
		 }
		 if($estacion == 'bodystatustable'){
		 	return view('admin.estaciones.bodystatus',compact('rows'));
		 }
		 if($estacion == 'cantilevertable'){
		 	return view('admin.estaciones.cantilever',compact('rows'));
		 }
		 if($estacion == 'conformaltable'){
		 	return view('admin.estaciones.conformal',compact('rows'));
		 }
		  if($estacion == 'coverassemblytable'){
		 	return view('admin.estaciones.coverassembly',compact('rows'));
		 }
		 if($estacion == 'coverstatustable'){
		 	return view('admin.estaciones.coverstatus',compact('rows'));
		 }
		  if($estacion == 'finalteststation1'){
		 	return view('admin.estaciones.finalTestStation1',compact('rows'));
		 }
		 if($estacion == 'finalteststation2'){
		 	return view('admin.estaciones.finalTestStation2',compact('rows'));
		 }
		 if($estacion == 'finalteststation3'){
		 	return view('admin.estaciones.finalTestStation3',compact('rows'));
		 }
		 if($estacion == 'finalteststation4a'){
		 	return view('admin.estaciones.finalTestStation4a',compact('rows'));
		 }
		 if($estacion == 'finalteststation4b'){
		 	return view('admin.estaciones.finalTestStation4b',compact('rows'));
		 }
		 if($estacion == 'frctionassemblydialtable'){
		 	return view('admin.estaciones.frictionAssembly',compact('rows'));
		 }
		 if($estacion == 'heatformdialtable'){
		 	return view('admin.estaciones.heatForm',compact('rows'));
		 }
		  if($estacion == 'labelprintertable'){
		 	return view('admin.estaciones.labelPrinter',compact('rows'));
		 }
		   if($estacion == 'laserengravertable'){
		 	return view('admin.estaciones.laser',compact('rows'));
		 }
 if($estacion == 'plugassemblytable'){
		 	return view('admin.estaciones.plugAssembly',compact('rows'));
		 }
		 if($estacion == 'welderrobottable'){
		 	return view('admin.estaciones.welderRobot',compact('rows'));
		 }

		 //dd($calibration);
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
	public function destroy($id)
	{
		//
	}

}
