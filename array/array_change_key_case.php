<!--
將 key 值改為全大寫或全小寫
return 而非更改原陣列
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$ary = array("a" => "x", "B" => "y", "c" => "z");

		print_r(array_change_key_case($ary, CASE_UPPER));
		//output: Array ( [A] => x [B] => y [C] => z )

		print_r(array_change_key_case($ary, CASE_LOWER));
		//output: Array ( [a] => x [b] => y [b] => z )
		//example:可用在字串比對需忽視大小寫的情況下
		$lower_ary = array_change_key_case($ary, CASE_LOWER);
		foreach ($lower_ary as $key => $value) {
			if ($key == "b") {
				echo $value;
			}
		}
		//output: y
		?>
    </body>
</html>
