<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FrictionAssembly extends Model {

	protected $table = 'frctionassemblydialtable';
	protected $primaryKey = 'Transaction';

	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}


}
