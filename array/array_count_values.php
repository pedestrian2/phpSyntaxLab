<!--
計算陣列中各value的次數,返回一陣列
中文亦可, value僅可為字串或數字
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$array = array("a" => "好", "天", "氣", "好", "力", "氣");
		print_r(array_count_values($array));
		//output: Array ( [好] => 2 [天] => 1 [氣] => 2 [力] => 1 )

		$array = array(null, false, true, false, true);
		var_dump(array_count_values($array));
		//output: array(0) { }
		?>
    </body>
</html>
