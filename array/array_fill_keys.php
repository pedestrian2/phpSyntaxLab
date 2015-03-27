<!--
php 5 >= 5.2.0
將一陣列目前的 value 變成 key 並以第二個引數置入其 value 中
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$ary = array("a" => "1", "b" => "2", "c" => 3, "d" => 4);
		print_r(array_fill_keys($ary, "content"));
		//output: Array ( [1] => content [2] => content [3] => content [4] => content )
		?>
    </body>
</html>
