<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/12
 * Time: 7:23
 */
namespace houdunwang\core;
 //进行命名空间
/**
 * 框架启动
 */
//定义一个类，这个类中集中了框架中所有的功能和方法
//相关的方法都通过 方法run()输出到唯一输出口index.PHP,得到功能实现
class Boot{
	///执行应用
	/// 定义一个总输出的方法run
	public static function  run(){
		//错误处理
		$whoops = new \Whoops\Run;
		$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
		$whoops->register();
		//测试
		//echo ' we run';
		//引入静态调用方法innt
		self::innt();
		//引入静态调用方法appRUN
		self::appRun ();

	}
         //定义方法函数innt
	public static function innt(){
		//定义头文件
		header ('content-type:text/html;charset=utf8');
		//定义对话文件，如果有会话则执行以下程序
        session_id () ||session_start ();
        //设置国内时区
        date_default_timezone_set ('PRC');
	}
           //定义一个运行方法
	public static function appRun (){
//echo 111;
//		p ($_GET['s']);die;
//		  判断浏览器地址栏的地址
          if (isset($_GET['s'])){
          	//如果地址栏有地址将地址以/分割为数组
                $info=explode ('/',$_GET['s']);
               //p ($info);Array
//			  (
//			  [0] => mid
//			  [1] => jqu
//			  [2] => tue
//)         且根据数组下标分别赋予一个变量。
			  $m=$info[0];
			  $c=$info[1];
			  $a=$info[2];

		  }else{
          	//如果没有输入网址将执行默认值，并返回默认网页
                $m='home';
                $c='index';
                $a='index';

		  }
		define ('MODULE',$m);
		define ('CONTROLLER',strtolower ($c));
		define ('ACTION',$a);
		  //define('MODULE')
		  //将相应的地址通过组合成文件地址目录并付给一个变量
      		$controller='\app\\' . $m .'\controller\\'.ucfirst ($c).'Controller';


		//(new $controller())->$a();
		//(new\app\admin\controller\IndexController())->index ();
		//调用回调函数，并把一个数组参数作为回调函数的参数实例化一个变量
        echo call_user_func_array ([new $controller,$a],[]);//1
        //echo (new Base());//1
}

    //注释顺序：1.用 echo call_user_func_array ([new $controller,$a],[])实例化一个类


}
