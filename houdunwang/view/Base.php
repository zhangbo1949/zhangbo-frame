<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/13
 * Time: 3:21
 */
namespace houdunwang\view;
class Base{

	private $file;
    private $data=[]; //由于$var是数组所以data需以数组的形式接受存储数据
	public function make($tpl=''){
       //echo 'make';成功测试
		$tpl = $tpl ? : ACTION;
		$this->file = '../app/'.MODULE.'/view/'.CONTROLLER.'/'.$tpl.'.php';
		return $this;
	}

	public function with($var=[]){
          //echo 'with测试';成功测试
          //p ($var);die;
		//测试成功Array
		//                       (
		//                           )
		//$this->with();
		//extract ($var);5
		//p ($test); 测试结果null
        $this->data=$var;
        return $this;
        //$this将按照进入的顺序返回给调用它的地方顺序为：
		//4.返给namespace houdunwang\view文件中的class View中的return call_user_func_array ([new Base(),$name],$arguments)中的$name----->3.返给private static function runParse($name,$arguments)的$name--->2.返给public function __call ( $name , $arguments )中的$name------>1.返给namespace app\home\controller文件中的class IndexController extends Controller类中的public function index()方法下的(new View())->with();

	}

	public function __toString ()
	{
		//echo 11;
		//echo '这是tosting';die;//测试成功这是tosting
		$a=extract ($this->data);
		//p ($a);
		if (!is_null ($this->file)){
             include $this->file;

		}
       return '';
	}
//难点__toString()过程：
//	  目的：为了加载模板所以需要调用方法make()方法，又需要传递变量需要调用with方法。
//	  因为VIEW里面没有make 和with 方法来触发 __call或者__callstatic这两个方法会调用自身对象里的runParse，这个runParse会NEW一个base对象，并且调用这个对象里的make 和with 方法，参数也会传递。执行完make 和with 方法会返回一个base对象，这些层层调用都需要返回一个base对象，因为需要echo一个base对象调用base对象里面的__tostring方法。


}