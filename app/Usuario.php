<?php namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract  {
use Authenticatable, CanResetPassword;
	//
	protected $table = 'usuarios';
		/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre','usuario','password','puesto','tipo'];
	//protected $guarded = ['id'];
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
		protected $hidden = ['password', 'remember_token'];

	public function historial(){

		return $this->hasOne('App\Historial');

	}

	public function scopeNombre($query,$nombre){

		if(trim($nombre) != ""){	
			$query->where('nombre',"LIKE", "%$nombre%");
		}
	}

	public function scopeTipo($query,$tipo){
		$tipos = config('options.types');
		if($tipo != "" && isset($tipos[$tipo])){
			$query->where('tipo',$tipo);
			
		}
	}

	public function setPasswordAttribute($value){

		if(!empty($value)){
			
			$this->attributes['password'] = \Hash::make($value);
		}
	}


}
