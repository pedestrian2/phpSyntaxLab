<!--
輸入一陣列，
將該陣列的 key 值返回，
第二個引數可指定特定 value，
第三個引數則可設定 value 的比對是否為 ===
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$ary = array("a" => 1, "b" => "x", "c" => "x", "d" => "1");

		print_r(array_keys($ary));
//		output:
//			Array 
//			( 
//				[0] => a 
//				[1] => b 
//				[2] => c 
//				[3] => d
//			)
		print_r(array_keys($ary, "1"));
//		output:
//			Array 
//			( 
//				[0] => a 
//				[1] => d
//			)
		print_r(array_keys($ary, "1", true));
//		output:
//			Array 
//			( 
//				[0] => d 
//			)
		?>
    </body>
</html>
