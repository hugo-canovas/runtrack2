<?php 

    $myArray = [200, 204, 173, 98, 171, 404, 459];
    $i = 0;

    while(isset($myArray[$i])){
        if($myArray[$i] % 2 == 0){
            echo $myArray[$i]." est paire</br>";
        } else {
            echo $myArray[$i]." est impaire</br>";
        }
        $i++;
    }
?>