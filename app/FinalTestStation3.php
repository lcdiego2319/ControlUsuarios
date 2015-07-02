<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalTestStation3 extends Model {

	//
	protected $table = 'FinalTestStation3';
	protected $primaryKey = 'Transaction';

	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}

}
