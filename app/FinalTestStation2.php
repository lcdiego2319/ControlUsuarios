<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalTestStation2 extends Model {

	//
	protected $table = 'FinalTestStation2';
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
