<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/12
 * Time: 7:05
 */
function p($var){
	echo '<pre style="width:100%;padding:5px;background: #pink;border-radius:5px">';
	if(is_bool($var)||is_null ($var)){
		var_dump ($var);
	}else{
		print_r ($var);
	}
	echo'</pre>';
}

define ('IS_POST',$_SERVER['REQUEST_METHOD']=='POST'?true:false);