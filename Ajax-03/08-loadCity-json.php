<?php
    header("Content-Type:application/json");
	$show = $_REQUEST["show"];
	$array = [["哈尔滨","大庆","黑河"],["长春","吉林","jj"],["沈阳","kk","jj"]];
	$city = $array[$show];
	$str = json_encode($city);
	echo $str;
?>