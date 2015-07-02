<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cantilever extends Model {

	//
	protected $table = 'cantilevertable';
	protected $primaryKey = 'Transaction';

	protected $fillable = ['SerialNumber'];

	public function scopeSerialNumber($query, $serialNumber){
		//dd("scope: ".$serialNumber);
		if(trim($serialNumber) != ""){
			$query -> where('SerialNumber',"LIKE","%$serialNumber%");
		}
	}

}
