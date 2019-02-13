<?php
	header("Conten-Type:application/json");
	#1.声明一个数组并且初始化三个省份的信息
	$array = ["黑龙江","吉林","辽宁"];
	$str = json_encode($array);
	echo $str;
?>