<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <title>PowerFalcon</title>
<?php
$ch = curl_init("http://192.168.1.208/cn/content.php?prod_id=430");

curl_setopt($ch, CURLOPT_URL, "http://192.168.1.208/cn/index.php");
curl_setopt($ch, CURLOPT_HEADER, false);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $PostData);

$temp = curl_exec($ch);
echo htmlentities($temp);
curl_close($ch);
?>
