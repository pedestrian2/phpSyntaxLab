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
        echo "microtime:".microtime()."<br/>";
        echo "microtime(true):".microtime(true)."<br/>";
        echo "time:".time()."<br/>";
        
        $start = microtime(true);
        for($i=0;$i<=1000000;$i++){
            time();
        }
        $end = microtime(true);
        $peroid = $end - $start;
        echo "Time cost $peroid <br/>";
        
        $start = microtime(true);
        for($i=0;$i<=1000000;$i++){
            microtime(true);
        }
        $end = microtime(true);
        $peroid = $end - $start;
        echo "microtime cost $peroid";
        ?>
    </body>
</html>
