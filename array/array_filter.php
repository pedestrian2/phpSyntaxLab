<!--
可過濾陣列空值，
使用迴圈搭配unset達到同樣效果，
但後者會直接影響原陣列，
前者只是返回過濾完的陣列，且可讀性較佳，效能也較好
以下面範例各跑一百萬次花費的時間

設定callback function 可以濾出指定 value 的元素

5.6.0 之後增加 flag 引數，可設定 ARRAY_FILTER_USE_KEY 或 ARRAY_FILTER_USE_BOTH
即可濾出陣列中含有指定 key 或 value 的元素


array_filter : 1.5490889549255 secnonds
迴圈搭配unset : 3.7582149505615 seconds

-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		//未設定第二個引數
		$ary = array(0 => "", 1 => "a", 2 => false, 3 => null, 4 => "b", 5 => "c");
		$ary_filter = array_filter($ary);
		var_dump($ary_filter);
//		output:
//			array(3) 
//		   { 
//				[1]=> string(1) "a" 
//				[4]=> string(1) "b" 
//				[5]=> string(1) "c" 
//			}
		//設定 callback function
		$ary_filter = array_filter($ary, filter_b);
		var_dump($ary_filter);

		function filter_b($value) {
			return $value == 'b';
		}

//		output:
//			array(1) 
//			{ 
//				[4]=> string(1) "b" 
//			}
		//迴圈搭配unset
		foreach ($ary as $key => $value) {
			if (empty($value)) {
				unset($ary[$key]);
			}
		}
		var_dump($ary);
//		output:
//			array(3) 
//		   { 
//				[1]=> string(1) "a" 
//				[4]=> string(1) "b" 
//				[5]=> string(1) "c" 
//			}
		?>
    </body>
</html>
