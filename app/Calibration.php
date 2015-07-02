<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Calibration extends Model {

	//
	protected $table = 'calibrationtable';
	protected $primaryKey = 'Transaction';
	protected $fillable = ['Transaction','Estacion','ErrorNumber','SwVersion'];

	  public $timestamps = false;

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
