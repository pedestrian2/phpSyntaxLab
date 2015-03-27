<!--
傳入多個陣列，
可自訂函式對 key 進行比對，
自訂函式中比對結果為大於、相等、小於時需返回，
大於、等於、小於 零 的整數。

*P.S.分不太出來和 array_intersect_key 的分別
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		function strCampare($str1, $str2){
			if($str1 === $str2){
				return 0;
			}elseif ($str1 > $str2) {
				return 1;
			}
			return -1;
		}
		
		$ary1 = array("a" => 1, "b" => 2, "c" => 3, "e" => 4);
		$ary2 = array("d" => 1, "b" => 2, "a" => 3, "c" => 4);
		$ary3 = array("c" => 1, "b" => 2);
		$ary_intersect = array_intersect_ukey($ary1, $ary2, $ary3, 'strCampare');
		var_dump($ary_intersect);
//		output:
//			array(2) 
//			{ 
//				["b"]=> int(2) 
//				["c"]=> int(3) 
//			}
		?>
    </body>
</html>
