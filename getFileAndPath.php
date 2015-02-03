<!DOCTYPE html>
<!--
__DIR__ available after php 5.30
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo __FILE__."<br/>";
        echo __DIR__."<br/>";
        echo basename(__FILE__)."<br/>";
        echo basename(__FILE__,".php")."<br/>";
        echo basename(__DIR__)."<br/>";
        echo basename(__DIR__,"Lab")."<br/>";
        echo dirname(__FILE__)."<br/>";
        echo dirname(dirname(__FILE__))."<br/>";
        echo dirname(__DIR__)."<br/>";
        
        $start = microtime(true);
        for($i=0;$i<=1000000;$i++){
            dirname(__FILE__);
        }
        $end = microtime(true);
        $peroid = $end - $start;
        echo "dirname(__FILE__) cost $peroid <br/>";
        
        $start = microtime(true);
        for($i=0;$i<=1000000;$i++){
            __DIR__;
        }
        $end = microtime(true);
        $peroid = $end - $start;
        echo "__DIR__ cost $peroid";
        
        /*
        D:\xampp\htdocs\phpSyntaxLab\index.php
        D:\xampp\htdocs\phpSyntaxLab
        index.php
        index
        phpSyntaxLab
        phpSyntax
        D:\xampp\htdocs\phpSyntaxLab
        D:\xampp\htdocs
        D:\xampp\htdocs
        dirname(__FILE__) cost 0.4360249042511 
        __DIR__ cost 0.088005065917969
         */
        ?>
    </body>
</html>
