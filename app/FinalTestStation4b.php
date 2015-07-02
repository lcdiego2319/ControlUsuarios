<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalTestStation4b extends Model {

	protected $table = 'FinalTestStation4b';
	protected $primaryKey = 'Transaction';

	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}
	//

}
