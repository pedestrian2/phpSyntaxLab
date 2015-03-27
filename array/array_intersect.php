<!--
傳入多個陣列，
當 value 有交集時返回一陣列，
包含陣列一中擁有該 value 的元素。
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php

		$ary1 = array("a" => 1, "b" => 2, "c" => 3, "e" => 1);
		$ary2 = array("d" => 1, "b" => 2, "a" => 3, "c" => 4);
		$ary3 = array("c" => 1, "e" => 5);
		$ary_intersect = array_intersect($ary1, $ary2, $ary3);
		var_dump($ary_intersect);
//		output:
//			array(2) 
//			{ 
//				["a"]=> int(1) 
//				["e"]=> int(1)
//			}
		?>
    </body>
</html>
