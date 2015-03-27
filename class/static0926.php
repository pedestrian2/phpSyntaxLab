
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>無標題文件</title>
        <script src="./MM_JAVASCRIPT2E/_js/jquery-1.7.2.min.js"></script>
        
<body>
<?php
class bar{
    static $statictest="hello";
    function echostatic(){
        return self::$statictest;               //使用自己的靜態屬性須加self::
    }
}

echo bar::$statictest;                          //可在不新增物件的情況下直接呼叫靜態屬性

$test = new bar();
echo $test->echostatic();                   



?>

</body>
</head>