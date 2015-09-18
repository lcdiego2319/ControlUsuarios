<?php namespace App\Http\Controllers\Estaciones;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Calibration as Calibration;
use App\FinalTestStation1 as FinalTestStation1;
use Illuminate\Http\Request;
use App\Conformal as Conformal;
use Carbon\Carbon as Carbon; 
class ReportsController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$fecha = Carbon::now();
		$fecha = $fecha->toDateString();
		return view('reportes',compact('fecha'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$estacion = $request->estacion;
		$dateStart = $request->inicio;
		$dateEnd = $request->fin;
		$filename = $request->filename;

		
		
			\Excel::create($filename, function($excel) use($dateStart,$dateEnd,$estacion)
			{
				
    			$excel->sheet('First sheet', function($sheet)  use($dateStart,$dateEnd,$estacion) {
    				$dateStart = str_replace('-', '/', $dateStart);
    				$dateEnd = str_replace('-', '/', $dateEnd);
    			$partes = \DB::table($estacion)->where('Date','>=',$dateStart)->where('Date','<=',$dateEnd)->get();
    			$partes =  json_decode(json_encode($partes), true);
    			//$partes = FinalTestStation1::where('Date','>=',$dateStart)->where('Date','<=',$dateEnd)->get();
    		

    				$sheet->fromArray($partes);
    			});
			})->store('xls', storage_path('excel/exports'))->export();
				$fecha = Carbon::now();
		$fecha = $fecha->toDateString();
		
		return view('reportes',compact('fecha'));
		
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
