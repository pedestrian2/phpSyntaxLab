
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>無標題文件</title>
        <script src="./MM_JAVASCRIPT2E/_js/jquery-1.7.2.min.js"></script>
        
  

    <body>

<?php

class classA {
    public $name = "大帥";                               //給$name 預設值為大帥, 也可不給預設值
        function print_name($name){                      //建立print_name()可給引數 $name
            $this->name = $name;                        //實體化後指定 name 屬性值為引數$name
            echo $this->name."<br>";                    //實體物件屬性name 已變成引數
        }
        function print_name2(){                         
            echo $this->name."<br>";                    //實體化後印出name屬性
        }
        function print_name3($name){
            $this->print_name($name)."<br>";            //可使用同class內的屬性
        }
}

$name1 = new classA();
$name1->print_name2();                                  //印出預設值
$name1 ->print_name("handsome");                        //此function 後name屬性即成為handsome
$name1->print_name2();
$name1->print_name3("handsome");                        //同class中不同function可互相呼叫彼此
                                                        //故$this指的是該class 而非所在的function, 所以才能呼叫到同一個class中的其他function
?>
    </body>
</head>