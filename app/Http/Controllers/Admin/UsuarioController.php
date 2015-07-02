<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario as Usuario;
use App\Historial as Historial;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\ResetPassRequest;
use App\Http\Requests\CreateSuperUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon as Carbon;
class UsuarioController extends Controller {


	public function __construct(){
		//$this->middleware('isAdmin',['except'=>['getSuperuser','storeSuperuser']]);
		$this->middleware('isExpire',['except' => ['goMain','goChangePassword','postResetPass','getSuperuser','storeSuperuser']]);
		$this->middleware('isSuper',['except'=>['goMain','goChangePassword','postResetPass','getSuperuser','storeSuperuser']]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{	
		$usuarios = Usuario::nombre($request->get('nombre'))->tipo($request->get('tipo'))->orderBy('id','DESC')->paginate();
	    return view('admin.usuario.index',compact('usuarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Auth::user())
	    {
	        $currentUser = Auth::user();
	        if($currentUser->tipo == 'superusuario'){
				return view('admin.usuario.crear');
			}
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
		if (Auth::user())
        {
           	$currentUser = Auth::user();
           	$usuario = Usuario::create($request->all());
			$usuario->fecha_password= Carbon::now();
           	$usuario->save();
			//$historial = Historial::create(['id_usuario'=>$currentUser->id,'anterior'=>'--','nuevo'=>$usuario->nombre,'campo'=>'N/A']);
        }else{
        	dd("no hay iniciada sesion");
        }       
		return \Redirect::route('administrador.usuarios.index');
	}
	/*Funcion para almacenar el superusuario*/
	public function storeSuperuser(CreateSuperUserRequest $request)
	{		
		$usuario = Usuario::create($request->all());
		$usuario->fecha_password= Carbon::now();
        $usuario->save();
		return \Redirect::route('administrador.usuarios.index');
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
		$usuario = Usuario::findOrFail($id);
		return view('admin.usuario.editar',compact('usuario'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request,$id)
	{
		$usuario = usuario::findOrFail($id);
		$usuario->fill($request->all()); //funcion sirve para actualizar unicamente determinados camp
		$usuario->save();
		Session::flash('message', "Los cambios han sido guardado.");
		$usuario = Usuario::findOrFail($id);
		$message = $usuario->nombre.' fue eliminado.';
		if($request->ajax()){
			return response()->json([
					'id'  => $usuario->id,
					'message' => $message
				]);	
		}
		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$usuario = Usuario::findOrFail($id);
		$usuario->delete();
		$message = $usuario->nombre.' fue eliminado.';
		if($request->ajax()){
			return response()->json([
					'id'  => $usuario->id,
					'message' => $message
				]);	
		}
		Session::flash('message',$message);
		return redirect()->route('administrador.usuarios.index');
	}

	/**/
	public function postFields(Request $request)
	{
		$usuario = Usuario::findOrFail($request->id);
		$columna = $request->columna;
		if (Auth::user())
        {
        	$currentUser = Auth::user();
			$historial = Historial::create(['id_usuario'=>$currentUser->id,'anterior'=>$usuario->$columna,'nuevo'=>$request->valor,'campo'=>$request->columna]);
        }else{
        	dd("no hay iniciada sesion");
        }
		$usuario->fill(\Request::only($request->columna));//request->columna contiene el nombre de la columan que se desea cambiar
		$id = $request->id;
		$usuario->save();
		Session::flash('message', "Los cambios han sido guardado.");
		if($request->ajax()){
			return response()->json([
					'id' => $id, 
					'nombre' => $usuario->nombre,				
					'message' => "ESTO FUNCIONO BIEN"
				]);	
		}
	}
	/*Funcion para mostrar la vista para la creacion del superusuario*/
	public function getSuperuser()
	{
		return view('admin.superuser.createSuperuser');
	}

	/*Funcion para cambiar el password despues de que se expiro.*/
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

	public function goMain(){
		return view('main');
	}
}

