<?php

    $operation = "";

    function calcul($a, $operation, $b){
        switch($operation){
            case "+":
                return $a + $b;
                break;
            case "-":
                return $a - $b;
                break;
            case "*":
                return $a * $b;
                break;
            case "/":
                return $a / $b;
                break;
            case "%":
                return $a % $b;
                break;
        }
    }

    echo calcul(3,"+", 5);

?>