<?php
//包含定义配置数据库连接的配置文件
$dbConf=include './config.inc.php';

//print_r($dbConf);
//exit;

//定义项目本身常规配置
$Conf=array(
	//'配置项'=>'配置值'
   //'URL_MODEL'=>0    //配置URL_MODEL=2 是URL重写模式     http://.../index/index
);


//如果把两个数组进行合并，则可以解决前台和后台都共用一个config.inc.php配置文件

return array_merge($dbConf,$Conf);
?>