<?php

$ary = array("A" => 1, "B" => 2, "C" => 3, "D" => "");
echo end($ary) . "<br>";
$ary2 = array();
$ary3 = array(0 => "");
foreach ($ary3 as $key => $value) {
	if ($value == "")
		unset($ary3[$key]);
}
$ary_intersect = array_intersect($ary3, $ary);
var_dump($ary_intersect);
var_dump(empty($ary_intersect));
var_dump(empty($ary3));
?>
