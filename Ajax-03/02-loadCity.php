<?php
	$show = $_REQUEST["show"];
	$array = [["哈尔滨","大庆","黑河"],["长春","吉林","jj"],["沈阳","kk","jj"]];
	$city = $array[$show];
	$opts = "";
	for ($i = 0 ; $i <count($city);$i++){
		$opts .= "<option value = '$i'>$city[$i]</option>";
	}
	echo $opts;
?>