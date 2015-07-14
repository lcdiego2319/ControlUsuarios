<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon as Carbon; 
use App\Usuario as Usuario;
use Illuminate\Support\Facades\Session;
class CustomAuthController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
public function getLogin()
{
	return view('custom_auth.login');
}

public function postLogin(LoginUserRequest $request){
	$usuario = $request->get('usuario');
	$password = $request->get('password');
	$credentials = ['usuario'=>$usuario, 'password'=>$password];

	if (Auth::validate($credentials))
	{
		if (Auth::attempt(['usuario' => $usuario, 'password' => $password]))
      {
      	$update = Auth::user()->fecha_password;
		$date_password = new Carbon($update);
		$hoy = Carbon::now();
		if($date_password->diff($hoy)->days >= 75 && $date_password->diff($hoy)->days < 90)//conocer si el usuario debe ser notificado para cambiar su password.
			{
				$dias = $date_password->diff($hoy)->days;
				$dias = 90 - $dias;
				return \View::make('admin.notification_password',['dias' => $dias]);
			}else{
				return view('qis');
			}
        }
        else{
        	return 'fallo';
        }
	}else{
		dd("credenciales no validas");
	}
}

public function getLogout(){
	if (Auth::user())
	{
        Auth::logout();
        return view('custom_auth.login');
    }
    else{
        	dd("No esta iniciada una sesion actualmente");
        }

}

	public function index()
	{
		return view('custom_auth.login');
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function postResetPass(ResetPassRequest $request){
		if(Auth::user()){
			Auth::user()->password = $request->password;
			Auth::user()->fecha_password = Carbon::now();
			Auth::user()->save();
			Auth::logout();
			return view('custom_auth.login');
		}
	}

	public function goChangePassword(){
		return view('admin.changepassword');
	}

}
