<?php namespace App\Http\Middleware;

use Carbon\Carbon as Carbon;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class IsExpire {

	private $auth;

	public function __construct(Guard $auth){
		$this->auth = $auth;
	}
	
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$update = $this->auth->user()->fecha_password;
		$date_password = new Carbon($update);
		$hoy = Carbon::now();
		if($date_password->diff($hoy)->days >= 90)//conocer si el usuario debe ser obligado a cambiar su password
		{ //se obtiene la diferencia entre fechas por dias.
			return view('admin.changepassword');
	//		dd("EL PASSWORD ESTA OBSOLETO");
		}

		if($this->auth->user()->tipo !='superusuario'){
		//	dd("eres adminstrador");
			
			//return response('Unauthorized.', 401);
			//$this->auth->logout();
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return \Redirect::route('administrador.calibration.index');
			}
		}
		return $next($request);
	}
}
