<?php
//预先定义数据库链接参数
$host = '127.0.0.1';
$user = 'root';
$pwd  = 'JIAluwang147';
$dbname = 'php10';

//链接到数据库
$db = new mysqli( $host, $user, $pwd, $dbname );
if( $db->connect_errno <> 0 ){
	die('链接数据库失败');
}

//设定数据库数据传输的编码
$db->query("SET NAMES UTF8");