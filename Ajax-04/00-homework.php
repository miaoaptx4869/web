<?php
	#1.添加响应消息头
	header("Content_Type:application/json");
	#2.引用00-init.php
	require("00-init.php");
	#3.构建sql语句
	$sql = "select uname ,email,user_name from xz_user";
	#4.到数据库中查询结果
	$result=mysqli_query($conn,$sql);
	#5.将结果转换为关联数组
	$array = mysqli_fetch_all($result,MYSQLI_ASSOC);
	#6.将关联数组转换为JSON格式字符串并响应
	echo json_encode($array);

?>

