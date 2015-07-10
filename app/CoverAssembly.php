<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CoverAssembly extends Model {

	//
	protected $table = 'coverassemblytable';
	protected $primaryKey = 'Transaction';

	public function scopeSerialNumber($query,$serialNumber){
		if(trim($serialNumber) != ""){
			$query->where('SerialNumber', "LIKE", "%$serialNumber%");
		}
	}
		public function scopeTableName(){
		return $this->getTable();
	}
}
