<?php
	#1.增加响应消息头
	header("Conten-Type:application/json");
	#2，声明一个普通数组，并且以JSON格式进行响应
	$province = ["黑龙江","吉林","辽宁"];
	#将$province转换成JSON格式的字符串再响应
	$str = json_encode($province);
	#将$str响应给客户端
	echo $str;
	

?>