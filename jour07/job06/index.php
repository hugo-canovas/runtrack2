<?php

    function leetSpeak($str){
        $code = "";
        for($i = 0; isset($str[$i]); $i++){
            if($str[$i] == "a" || $str[$i] == "A"){
                $code .= 4;
            }else if($str[$i] == "b" || $str[$i] == "B"){
                $code .= 8;
            }else if($str[$i] == "e" || $str[$i] == "E"){
                $code .= 3;
            }else if($str[$i] == "g" || $str[$i] == "G"){
                $code .= 6;
            }else if($str[$i] == "l" || $str[$i] == "L"){
                $code .= 1;
            }else if($str[$i] == "s" || $str[$i] == "S"){
                $code .= 5;
            }else if($str[$i] == "t" || $str[$i] == "T"){
                $code .= 7;
            }else{
                $code.=$str[$i];
            }
        }
        return $code;
    }

     echo leetSpeak("Hello laPlateforme!");

?>