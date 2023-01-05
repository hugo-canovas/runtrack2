<form action="index.php" method="get">
    <input type="text" name="nombre">
    <button type="submit">Envoyer</button>
</form>

<?php

    $i=0;

    while(isset($_GET['nombre'][$i])){
        $i++;
    }

    if(isset($_GET['nombre'])){
        if((string)$_GET['nombre']){
            if($i % 2 == 0){
                echo "Le mot <b>".$_GET['nombre']."</b> à pour valeur ".$i." et est <b>pair</b>";
            }else if((int)$_GET['nombre']!=0){
                if($_GET['nombre'] % 2 == 0){
                    echo "Le nombre ".$_GET['nombre']." est <b>pair</b>";
                }else{
                    echo "Le nombre ".$_GET['nombre']." est <b>impair</b>";
                }
            }else{
                echo "Le mot <b>".$_GET['nombre']."</b> à pour valeur ".$i." et est <b>impair</b>";
            }
        }
    }
?>