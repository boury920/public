<?php
include (‘input.php’); 
include（‘connect.php’);

$content = $_POST['content'];
$user = $_POST['user'];


$input = new input(); 


$is = $input->post($content);
if($is==fales){
	die("使用的数据内容不正确");
}
$is = $input->post($user);
if($is==fales){
	die("禁止使用的留言人叫法不正确");
}

$time = time();
$sql = "INSERT INTO msg (content, user, intime) values ('{$content}', '{$user}','{$time}')";
$is = $db->query($sql);
//var_dump( $is );
header("location: gbook.php");
?>