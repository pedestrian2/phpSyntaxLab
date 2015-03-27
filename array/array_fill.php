<!--
指定陣列開始的陣列位置, 元素個數, 以及要填入的值
返回一個如上要求的陣列
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$ary = array_fill(2, 4, "content");
		print_r($ary);
		//output: Array ( [2] => content [3] => content [4] => content [5] => content )
		?>
    </body>
</html>
