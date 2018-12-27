<?php
//预先定义数据库链接参数
$host = '127.0.0.1';
$user = 'root';
$pwd  = 'JIAluwang147';
$dbname = 'php10';

//链接到数据库
$db = new mysqli( $host, $user, $pwd, $dbname );
$db ->query("set names UTF-8");
//检查是否成功
if( $db->connect_errno <> 0 ){
 echo "链接失败，";
 echo $db->connect_error;
}
$sql = "SELECT * FROM msg ORDER BY id DESC";
$mysqli_result = $db -> query( $sql );
if( $mysqli_result === false ){
	echo "sql错误";
	exit;
}
$rows=[];
while( $row=$mysqli_result->fetch_array( MYSQLI_ASSOC)){
$rows[]=$row;
} 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>留言本</title>
		<style>
		.wrap{
			width:600px;
			margin:0px auto;
		}
		.add{overflow: hidden;}
		.add .content{
			width:598px;
			margin:0;
			padding:0;
		}
		.add .user{
			float:left;
		}
		.add .btn{
			float:right;
		}

		.msg{margin:20px 0px;background: #ccc;padding:5px;}
		.msg .info{overflow: hidden;}
		.msg .user{float:left;color:blue;}
		.msg .time{float:right;color:#999;}
		.msg .content{width:100%;}
		</style>
	</head>
	<body>
		<div class='wrap'>
			<!-- 发表留言 -->
			<div class='add'>
			<form action="save.php" method="post">
				<textarea name='content' class='content' cols='50' rows='5'></textarea>
				<input name='user' class='user' type='text' />
				<input class='btn' type='submit' value='发表留言'/>
			</form>
			</div>
<?php
foreach ($rows as $row){
	date_default_timezone_set("Asia/Shanghai");
	?> 
			<!-- 查看留言 -->

			<div class='msg'>
				<div class='info'>
					<span class='user'><?php echo $row['user'];?></span>
					<span class='time'><?php echo date("Y-m-d h:i:s",$row['intime']);?></span>
				</div>
				<div class='content'>
					<?php echo $row ['content'];?>
				</div>
			</div>	
			<?php
			}		
			?>	
		</div>
	</body>
</html>