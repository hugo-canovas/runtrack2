<?php
    
    function occurences($str, $char){
        $occur = 0;
        for($i=0; isset($str[$i]); $i++){
            if($str[$i] == $char){
                $occur++;
            }
        }
        return $occur;
    }

    echo occurences("Bonjour", "o");

?>