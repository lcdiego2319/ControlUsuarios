<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalTestStation1 extends Model {

	//
	protected $table = 'finalteststation1';
	protected $primaryKey = 'Transaction';

	public function scopeSerialNumber($query, $serialNumber){
		if(trim($serialNumber)!=""){
			$query->where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}
	public function scopeTableName(){
		return $this->getTable();
	}
}
