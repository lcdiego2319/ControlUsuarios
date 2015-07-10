<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CoverStatus extends Model {

	//
	protected $table = 'coverstatustable';
	protected $primaryKey = 'SerialNumber';

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
