<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
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
			'usuario' => 'required|unique:usuarios,usuario',
			'password' => 'required',
			'puesto' => 'required',
			'tipo' => 'required|in:user,admin' 
			//
		];
	}

}
