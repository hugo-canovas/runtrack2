<?php
    
    $jour = false;

    function bonjour($jour){
        if($jour == true){
            return "Bonjour";
        }else{
            return "Bonsoir";
        }
    }

    echo bonjour($jour);

?>