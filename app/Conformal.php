<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Conformal extends Model {

	//
	protected $table = 'conformaltable';
	protected $primaryKey = 'Transaction';
	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}


}
