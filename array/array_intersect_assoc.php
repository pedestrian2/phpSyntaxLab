<!--
傳入多個陣列，
返回一陣列，包含所有傳入陣列的交集元素，
需 key 與 value 皆一致才會返回。
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$ary1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
		$ary2 = array("d" => 1, "b" => 2, "a" => 3, "c" => 4);
		$ary3 = array("a" => 3, "b" => 2);
		$ary_intersect_assoc = array_intersect_assoc($ary1, $ary2, $ary3);
		var_dump($ary_intersect_assoc);
//		output:
//			array(1) 
//			{ 
//				["b"]=> int(2) 
//			}
		?>
    </body>
</html>
