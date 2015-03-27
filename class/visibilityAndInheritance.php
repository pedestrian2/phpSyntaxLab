
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>無標題文件</title>
        <script src="./MM_JAVASCRIPT2E/_js/jquery-1.7.2.min.js"></script>
        

<body>
<?php

class grandf{
    public $generation;
    public $firstName = 'Stone';
    protected  $middleName;
    private  $lastName;
    
    public function __construct() {
        $this->middleName = 'John';
        $this->lastName = 'Teddy';
    }
    public function echoName($gen){
        $this ->generation =$gen;
        echo 'I am '.$this->generation.'<br>';
        echo 'My name is '.$this->firstName.$this->middleName.$this->lastName.'<br>';
        echo 'firstname is:'.$this->firstName.'<br>';
        echo 'middlename is:'.$this->middleName.'<br>';
        echo 'lastname is:'.$this->lastName.'<br>';
    }
}

$name = new grandf();                                     //在自己class內使用三種visibility皆沒問題

$name ->echoName('grandfather');

echo "<hr>";

class father extends grandf{
    private $lastname = "Peter";                         
    public $hello = 'hello';
    
    function fatherecho(){                                 
        echo $this->lastname;
    }
    public function __construct() {                         //修改來自祖父的__construct, 會覆蓋祖父的
        $this->middleName = 'Johnson';                    //protected 子代可繼承
        $this->lastName = "Peter";                        //undefined private無法更改
        echo $this->hello;                                    
    }
    function echoName($gen) {
        parent::echoName($gen);                             //呼叫祖父的echoName()
        echo $this->lastname;                              //呼叫自身的lastname
    }
    
}

$name2 = new father();                                     

$name2 ->echoName('father');


$name2->fatherecho();                                     

?>

</body>
</head>