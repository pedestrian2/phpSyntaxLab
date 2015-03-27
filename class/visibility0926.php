
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>無標題文件</title>
        <script src="./MM_JAVASCRIPT2E/_js/jquery-1.7.2.min.js"></script>
        
<body>
<?php

class grandf{
    public $generation = 'grandfather';
    public $firstName = 'Stone';
    protected  $middleName;
    private  $lastName;
    
    public function __construct() {
        $this->middleName = 'John';
        $this->lastName = 'Teddy';
    }
    public function echoName(){
        echo 'I am '.$this->generation.'<br>';
        echo 'My name is '.$this->firstName.$this->middleName.$this->lastName.'<br>';
        echo 'firstname is:'.$this->firstName.'<br>';
        echo 'middlename is:'.$this->middleName.'<br>';
        echo 'lastname is:'.$this->lastName.'<br>';
    }
}

$name = new grandf();                                     //在自己class內使用三種visibility皆沒問題
                                                          //$name物件化的同時__construct內的程式即開始執行


$name ->echoName();

$name->generation = 'grandpa';                                   //僅有public可於class外重新定義

$name ->echoName();

echo 'grandfather firstname is:'.$name->firstName.'<br>';             //public可於class外可直接呼叫
//echo 'grandfather middlename is:'.$name->middleName.'<br>';         //fatal error     pprtected和private無法於class外直接呼叫
//echo 'grandfather lastname is:'.$name->lastName.'<br>';             //fatal error


?>

</body>
</head>