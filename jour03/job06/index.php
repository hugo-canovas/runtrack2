<?php 

    $str = "Les choses que l'on possede finissent par nous posseder";
    // $i = 0;
    
    // while(isset($str[$i])){
    //     $i++;
    // }
    // for($i; $i >= 0; $i--){
    //     if(isset($str[$i])){
    //         echo $str[$i];
    //     } 
    // }
    for($i = -1; isset($str[$i]) == true; $i--)
        echo $str[$i]

?>