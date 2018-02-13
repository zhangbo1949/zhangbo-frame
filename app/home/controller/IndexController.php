<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/12
 * Time: 10:14
 */
   namespace app\home\controller;

   use houdunwang\core\Controller;

   use houdunwang\view\View;
   use houdunwang\view\Base;

   use houdunwang\model\Model;

   class IndexController extends Controller{
	   //定义一个index方法，并输出相应文字
   	public function index()//2
	{
		//return View::make('tru');//3
		//显示以下内容地址栏使用的是默认地址，所以不需要设置地址栏
		//第一步.完成测试 //echo'home index index';//home index index可正常输出，此类为默认输出口；由于继承父级类，在此测试父级调用       //parent::index(); //测试在父级类建立一个方法进行调用并成功

		//第三部 在namespace houdunwang\view中的Base方法中调用非静态方法make 的内容，
		//启动make由于本页面已通过命令：use houdunwang\view\View 连接到View类 ----->view文件中的__call--->调用self::runParse($name,$arguments)---->启动命令return call_user_func_array ([new Base(),$name],$arguments)---->连接到类Base()。
		//(new View())->make();// echo 'make'测试成功;
		//道理同上测试成功
		//(new View())->with();
		//1
		//(new view())->__toString();

		//$test='houdunwang';
		//$hd=[1,2,3];
		//p(compact ('test','hd'));
		//return (new View())->with(compact ('test','hd'));

		//第四部
		$data=Model::query('select*from oldgirls');
		//$data=Model::exec('update student set name="bobo"where id=7');

		p($data);



	}

	   //定义一个add方法，并输出相应文字
    public function add(){
         //第二步  //修改地址栏?s=home/index/add控制器才可以输出以下echo内容，输出成功
              //echo 'home index add ';

		//在启动以下命令前需在地址栏输入地址?s=home/index/add，引入message 引入的页面
		//测试成功$this->setRedirect ('')->message ('添加不成功');


	}

   }
