<?php
	#1.连接数据库
	require("00-init.php");
	#2.接收前端传递过来的 数据
	$uname = $_REQUEST["uname"];
	$password = $_REQUEST["upwd"];
	#3.到数据库中验证用户名密码是否正确
	$sql = "select * from xz_user where uname = '$uname' and password = '$password'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($result);
	if ($row == null){
		echo "error";
	}else{
		echo "success";
	}
?>