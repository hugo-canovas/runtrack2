<?php

    $str = "Dans l'espace, personne ne vous entend crier";
    $i = 0;

    while(isset($str[$i])){
        $i++;
    }
    echo "<p>la chaine de caractères \"$str\" est composé de ".$i." caractères";

    for($i = 0; isset($str[$i]) == true; $i++);
        echo "<p>la chaine de caractères \"$str\" est composé de ".$i." caractères";

?>