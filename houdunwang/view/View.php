<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/13
 * Time: 1:59
 */

namespace houdunwang\view;

class View
{
	public function __call ( $name , $arguments )
	{

		//echo"哈哈哈哈哈";2
		return self::runParse ( $name , $arguments );
		//call_user_func_array ([new Base(),$name],$arguments);
	}

	public static function __callStatic ( $name , $arguments )
	{
		return self::runParse ( $name , $arguments );
	}

	private static function runParse ( $name , $arguments )
	{
		//3
		//p ($name);
		//   echo 123;die;
		   p ($arguments);
		   p()
		return call_user_func_array ( [ new Base() , $name ] , $arguments );
		//4

	}

}