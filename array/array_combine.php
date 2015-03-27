<!--
將兩陣列中的 value 分別做為 key值 和 value值 合併為單一陣列,
兩陣列需等長否則會return false
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		//原本的key會被捨棄
		$ary_keys = array("a1" => "a", "a2" => "b", "a3" => "c", "a4" => "d");
		$ary_values = range(1, 4);

		print_r(array_combine($ary_keys, $ary_values));
		//output: Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 )
		//不等長
		$ary_keys = array("a", "b", "c", "d", "e");
		$ary_values = range(1, 4);
		var_dump(array_combine($ary_keys, $ary_values));
		//output: bool(false)
		?>
    </body>
</html>
