<!DOCTYPE html>
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
        
        
        /*
         * ouput:
         *  microtime:0.22268100 1422235329
            microtime(true):1422235329.2227
            time:1422235329
            Time cost 0.19701099395752 
            microtime cost 3.2161841392517
         * microtime function spend more than time function
         */
        ?>
    </body>
</html>
