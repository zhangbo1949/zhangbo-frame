<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/12
 * Time: 7:16
 */


//引入composer自动生成vendor的文件，且在此文件中引入助手文件及系统开发区和系统核心区的目录
//借助此vendor还引入自动连接文件，用于调用相关类和方法
require_once '../vendor/autoload.php';
//通过目录进行静态调用
\houdunwang\core\Boot::run ();

