<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
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
        echo dirname(__DIR__);
        
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
         */
        ?>
    </body>
</html>
