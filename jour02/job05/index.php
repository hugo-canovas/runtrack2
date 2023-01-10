<?php
    
    for($i=1; $i <= 1000; $i++){
        $d= 0;
        for($n=1; $n <= $i; $n++){
            if($i % $n == 0){
                $d++;
            }
        }

        if($d == 2){
            echo $i.' est un nombre premier</br>';
        }
    
    }
    

?>