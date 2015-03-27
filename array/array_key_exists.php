<!--
輸入一陣列，
指定的 key 如存在則返回 true
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php

		$ary = array("a" => 1, "b" => "", "c" => null);
		
		var_dump(isset($ary['b']));
//		output:
//			bool(true)
		var_dump(array_key_exists('b', $ary));
//		output:
//			bool(true)
		
		
		var_dump(isset($ary['c']));
//		output:
//			bool(false)
		var_dump(array_key_exists('c', $ary));
//		output:
//			bool(true)
		?>
    </body>
</html>
