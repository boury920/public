<?php
$dbhost = '127.0.0.1';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = 'JIAluwang147';          // mysql用户名密码
$dbname = "php10";
$db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(! $db )
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！ ';
 
$db->query("set names utf8");
/*$sql="INSERT INTO msg (content, user, intime) VALUES ('1' ,'user', 12345)";
$is = $db-> query($sql);
if($is ==ture){
	echo "success";
}
else{
	echo "fales";
}*/
$sql = "SELECT * FROM msg";
$mysqli_result = $db -> query( $sql );
if( $mysqli_result === false ){
	echo "sql错误";
	exit;
}
$rows=[];
while( $row=$mysqli_result->fetch_array( MYSQLI_ASSOC)){
$rows[]=$row;
	# code...
}
var_dump($rows);
?>