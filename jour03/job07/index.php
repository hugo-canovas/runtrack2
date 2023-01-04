<?php
    
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $new_str = "";

    for($i = 0; isset($str[$i])==true; $i++){
        if(isset($str[$i+1])){
            $new_str[$i] = $str[$i+1];
        }else{
            $new_str[$i] = $str[0];
        }
        
    }
    echo $new_str;

?>