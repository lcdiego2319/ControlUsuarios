<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class WelderRobot extends Model {

	//
	protected $table = 'welderrobottable';
	protected $primaryKey = 'Transaction';

	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}
		public function scopeTableName(){
		return $this->getTable();
	}
}
