<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class IsSuperUser {

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
		//dd("super");
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
