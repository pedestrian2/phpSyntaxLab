<!--
根據所給的 size 大小切分原陣列為許多同size的小陣列,
返回單個二維陣列, 第三個變數預設不保留原本的 key,
如設定為 true 則會保留
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<pre>
			<?php
			$ary = Array
				(
				"a" => "x",
				"B" => "y",
				"c" => "z",
				"D" => "s",
				"e" => "t");

			print_r(array_chunk($ary, 2));
			/* output:
			  Array
			  (
			  [0] => Array
			  (
			  [0] => x
			  [1] => y
			  )

			  [1] => Array
			  (
			  [0] => z
			  [1] => s
			  )

			  [2] => Array
			  (
			  [0] => t
			  )

			  )
			 */
			print_r(array_chunk($ary, 2, true));
			/* output:
			  Array
			  (
			  [0] => Array
			  (
			  [a] => x
			  [B] => y
			  )

			  [1] => Array
			  (
			  [c] => z
			  [D] => s
			  )

			  [2] => Array
			  (
			  [e] => t
			  )

			  )
			 */

			//example:簡單的分頁
			$page = rand(1, 3);
			$pagesize = 8;
			foreach (range(1, 20) as $i) {
				$merchandise["item" . $i] = "item{$i}Content";
			}
			$merchandise_chunk = array_chunk($merchandise, $pagesize);

			foreach ($merchandise_chunk[$page - 1] as $value) {
				echo $value . "<br/>";
			}
			?>
		</pre>
    </body>
</html>
