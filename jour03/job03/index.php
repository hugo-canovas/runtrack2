<?php

    $str = "I\'m sorry Dave I'm afraid I can\'t do that";
    $voyelle = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    $i=0;

    while(isset($str[$i])){
        foreach($voyelle as $key => $value){
            if($str[$i] == $voyelle[$key]){
                echo $str[$i];
            }
        }
    $i++;
    }
?>