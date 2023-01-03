<?php

    $hauteur = 5;

    for($i = 0; $i <= $hauteur; $i++){
        for ($i = 0; $i < $hauteur; $i++){
            for($n=0;$n<=$i;$n++){
                echo "*";
            }
            echo "<br />";
        }
    }
?>