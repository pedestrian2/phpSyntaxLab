<!--
尋找陣列的差集
引數可輸入多個陣列,
以第一個陣列為基準與接下來的陣列做比對,
元素 value值 比對到相同的值時就不會,
包含在回傳陣列的元素中
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$ary1 = array("a" => "一", "b" => "二", "c" => "三");
		$ary2 = array("d" => "一", "b" => "二", "c" => "四");
		$ary3 = array("d" => "一", "b" => "二", "c" => "四");
		print_r(array_diff($ary1, $ary2));
		//output: Array ( [c] => 三 ) 

		print_r(array_diff($ary2, $ary1));
		//output: Array ( [c] => 四 ) 

		print_r(array_diff($ary1, $ary2, $ary3));
		//output: Array ( [c] => 三 )

		print_r(array_diff($ary2, $ary1, $ary3));
		//output: Array ()
		?>
    </body>
</html>
