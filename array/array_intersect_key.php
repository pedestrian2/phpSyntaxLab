<!--
傳入多個陣列，
當各傳入陣列 key 值有交集時，
返回一陣列，包含陣列一中擁有相對 key 值的元素( value 同陣列一該 key 值原宿)。
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$ary1 = array("a" => 1, "b" => 2, "c" => 3, "e" => 4);
		$ary2 = array("d" => 1, "b" => 2, "a" => 3, "c" => 4);
		$ary3 = array("a" => 5, "e" => 4);
		$ary_intersect_key = array_intersect_key($ary1, $ary2, $ary3);
		var_dump($ary_intersect_key);
//		output:
//			array(1) 
//			{ 
//				["a"]=> int(1) 
//			}
		?>
    </body>
</html>
