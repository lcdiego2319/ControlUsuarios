<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodystatustable extends Model {

	//
	protected $table = "bodystatustable";
	protected $fillable = ['SerialNumber',
							'FrictionAssemblyDialStatus',
							'HeatFormDialStatus',
							'CoverAssemblyStatus',
							'PlugAssemblyManualStatus',
							'LaserEngraverStatus',
							'LabelPrinterStatus',
							'SerialNumberCover',
							'CalibracionStatus',
							'FinalTestStation1Status',
							'FinalTestStation2Status',
							'FinalTestStation3Status',
							'FinalTestStation4aStatus',
							'Date',
							'FinalTestStation4bStatus'
						];


	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}
}
