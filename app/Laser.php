<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Laser extends Model {

	//
	protected $table = 'laserengravertable';
	protected $primaryKey = 'Transaction';

	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}

}
