<?php
	header("Content-type:text/html;charset=utf8");
	require('../smarty/Smarty.class.php');//smarty引入
	$smarty = new Smarty();//实例化
	//五配置两方法
	//五配置
	$smarty->left_delimiter="{";//左定界符
	$smarty->right_delimiter="}";//右定界符
	$smarty->template_dir="tpl";//html模板地址
	$smarty->compile_dir="template_c";//模板编译生成的文件
	$smarty->cache_dir="cache";//缓存
	//以下是开启缓存的另两个配置。因为通常不用smarty的缓存机制，所以此项为了解
	$smarty->caching = true;//开启缓存
	$smarty->cache_lifetime = 120;
	
	class My_Object{
		function meth1($params){
			return $params[0].'已经'.$params[1];
		}
	}
	$myobj = new My_Object();
	$smarty->assign('time',time());//变量赋值
	$smarty->display('test.tpl');
	
?>