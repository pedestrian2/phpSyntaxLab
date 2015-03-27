<!--
陣列索引有無引號效能差異極大

normal
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		
		//陣列索引有加引號
		$ary = array("a" => "name", "b"=>"email","c"=>"address");
		$start = microtime(true);
		for ($i = 1; $i <= 100000; $i++) {
			$ary['a'];
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "Cost:$period <br>";
		//0.0070009231567383 
		
		//陣列索引未加引號
		$start = microtime(true);
		for ($i = 1; $i <= 100000; $i++) {
			$ary[a];
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "Cost:$period <br>";
		//19.16309595108 
		
		?>
    </body>
</html>
