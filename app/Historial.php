<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model {

	//
	protected $table = 'historials';

	protected $fillable = ['usuario','anterior','nuevo','campo','tabla'];


	public function scopeUsuario($query, $usuario){
	//	dd('diego');
		//dd("scope: ".$serialNumber);
		if(trim($usuario) != ""){
			$query -> where('usuario',"LIKE","%$usuario%");
		}
	}

	
}
