<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PlugAssembly extends Model {

	//
	protected $table = 'plugassemblytable';
	protected $primaryKey = 'Transaction';

	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}

}
