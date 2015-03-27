<!--
php 5 >= 5.5.0
於二維陣列中取得key值相同的元素返回一維陣列,
有指定第三個引數時將會取得該key值中的元素作為新陣列的key值,
尤其適合將資料庫資料放在陣列中操作, 需取得單一欄位資料時使用

未測試: 同key元素位於陣列不同位置是否可以正常運作
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$dbresult = array
		(
		array("name" => "ball", "content" => "this is a ball", "price" => 30),
		array("name" => "pen", "content" => "this is a pen", "price" => 10),
		array("name" => "brush", "content" => "this is a brush", "price" => 20)
		)
		print_r(array_column($dbresult, "name"));
		/* output:
		 * 		array
		 * 		(
		 * 			array([0] => ball, [1] => pen, [2] => brush)
		 * 		)
		 * 
		 */

		//指定第三個引數
		$dbresult = array
		(
		array("name" => "ball", "content" => "this is a ball", "price" => 30),
		array("name" => "pen", "content" => "this is a pen", "price" => 10),
		array("name" => "brush", "content" => "this is a brush", "price" => 20)
		)
		print_r(array_column($dbresult, "price", "name"));
		/* output:
		 * 		array
		 * 		(
		 * 			array([ball] => 30, [pen] => 10, [brush] => 20)
		 * 		)
		 * 
		 */
		?>
    </body>
</html>
