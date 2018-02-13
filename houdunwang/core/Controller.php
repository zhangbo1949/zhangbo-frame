<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/12
 * Time: 22:23
 */
namespace houdunwang\core;

class Controller{

	private $url;

	//public  function index(){
	//	echo '测试';}父级调用测试
	//由于在app\home\controller中引入了use houdunwang\core\Controller，且把此类继承为父类，当app\home\controller引入父级index()方法时，所有在父级方法中的输入都将传入子集并由子集输出
	//
	public function  message($msg){
           echo "hahaahha";
           include './view/message.php';

	}
   public function setRedirect($url='')
   {
	   if ( $url ) {
		   $this->url = $url;
	   } else {
		   $this->url = 'javascript:history.back();';
	   }
	   return $this;
   }
}