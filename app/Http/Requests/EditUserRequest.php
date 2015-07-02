<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function __construct(Route $route){
		$this->route = $route;
	}
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		'nombre' => 'required',
			'usuario' => 'required|unique:usuarios,usuario,'.$this->route->getParameter('usuarios'),
			'password' => '',
			'puesto' => 'required',
			'tipo' => 'required|in:user,admin,superusuario' 
			//
		];
	}

}
