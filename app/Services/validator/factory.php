<?php
namespace App\Services\validator;
use App\Services\validator\validator;
class factory {

	/**
	 * Create a new Validator instance.
	 *
	 * @param  array  $data
	 * @param  array  $rules
	 * @param  array  $messages
	 * @return \Illuminate\Validation\Validator
	 */
	public static function make(array $data, array $rules, array $messages = array())
	{

		$validator = new validator($data,$rules,$messages);

		return $validator;

	}

}
