<!--
返回一陣列 
其 value 是原陣列的 key，
其 key 是原陣列的 value，
轉換後需為合法的 key 值才能正確轉換，
當原陣列有重複的 value 時只會返回其中一個。

想判斷陣列中是否含有某個value時可以搭配isset使用，
取代 in_array ，
其效能較 in_array 快近一倍，
但如需加上 array_flip 本身的運行時間就沒有比較快，
如只需單次對此array進行比對，用 in_array 還是比較省事
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$ary = array(0 => "a", 1 => "b", 2 => "c", 4 => "d", 5 => "d");
		$ary_flip = array_flip($ary);
		var_dump($ary_flip);
//		output:
//			array(4) 
//			{
//				["a"] => int(0) 
//				["b"] => int(1) 
//				["c"] => int(2) 
//				["d"] => int(5)
//			}
		
		$ary = range(1, 2000000);
		$ary_flip = array_flip($ary);
		$start = microtime(true);
		foreach (range(1, 1000000) as $value) {
			isset($ary_flip[1]);
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "flipcost:$period <br>";
		//output:0.37302112579346 

		$start = microtime(true);
		foreach (range(1, 1000000) as $value) {
			in_array(1, $ary);
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "cost:$period <br>";
		//output:0.66403794288635 
		?>
    </body>
</html>
