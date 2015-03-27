<!--
while在執行速度上是三種寫法裡面最快的。
for 又比 foreach 要快一些，
但由於range產生的陣列越長，花費的時間越多，
因此當迴圈次數極大時不建議使用foreach寫法。
使用for按照陣列元素個數進行迴圈時，
別把count或其他函式寫在for的條件設定中，
由於每次迴圈都會跑一次會多花很多時間。
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$testStr = null;

		//for
		$start = microtime(true);
		for ($i = 1; $i <= 1000000; $i++) {
			isset($testStr);
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "forCost:$period <br>";
		//forCost:0.05600380897522 
		//foreach not include range()
		$ary = range(1, 1000000);
		$start = microtime(true);
		foreach ($ary as $value) {
			isset($testStr);
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "foreachCost:$period <br>";
		//foreachCost:0.059002876281738 
		//foreach include range()
		$start = microtime(true);
		foreach (range(1, 1000000) as $value) {
			isset($testStr);
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "foreachIncludeRangeCost:$period <br>";
//		foreachIncludeRangeCost:0.37002110481262 
		//for and count bad efficacy
		$start = microtime(true);
		for ($i = 1; $i <= count($ary); $i++) {
			isset($testStr);
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "forAryBadEfficacyCost:$period <br>";
//		forAryBadEfficacyCost:0.26101517677307 
		// for and count good efficacy
		$start = microtime(true);
		$countary = count($ary);
		for ($i = 1; $i <= $countary; $i++) {
			isset($testStr);
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "forAryGoodEfficacyCost:$period <br>";
//		forAryGoodEfficacyCost:0.057003021240234 
		//while
		$start = microtime(true);
		$i = 1;
		while ($i <= 1000000) {
			isset($testStr);
			$i++;
		}
		$end = microtime(true);
		$period = $end - $start;
		echo "whileCost:$period <br>";
		//whileCost:0.050003051757812 
		?>
    </body>
</html>
