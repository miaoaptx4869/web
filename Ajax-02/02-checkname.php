<?php
		#接收前端传递过来的数据uname
		#如果uname 的值为admin的话，则视为已存在，否则不存在
		$uname = $_REQUEST["uname"];
		if ($uname == "admin"){
			echo "已存在";
		}else{
			echo "通过";
		}
?>