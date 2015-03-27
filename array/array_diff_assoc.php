<!--
尋找陣列的差集
引數可輸入多個陣列,
以第一個陣列為基準與接下來的陣列做比對,
元素 key 值 與 value 值無比對到完全相同元素時,
返回一包含這些元素的陣列
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
		print_r(array_diff_assoc($ary1, $ary2));
		//output: Array ( [a] => 一 [c] => 三 )

		print_r(array_diff_assoc($ary2, $ary1));
		//output: Array ( [d] => 一 [c] => 四 )

		print_r(array_diff_assoc($ary1, $ary2, $ary3));
		//output: Array ( [a] => 一 [c] => 三 )

		print_r(array_diff_assoc($ary2, $ary1, $ary3));
		//output: Array ()
		?>
    </body>
</html>
