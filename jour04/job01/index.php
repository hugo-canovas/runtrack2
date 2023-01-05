<form action="index.php" method="get">   
    <input name="name" placeholder="Entrez votre nom" type="text">
    <input name="username" placeholder="Entrez votre prénom" type="text">
    <input value="Envoyer" type="submit">
</form>

<?php

    $i=0;
    foreach($_GET as $key => $value){
        if(isset($_GET[$key]) != ""){
            $i++;
        }
    }
    echo "le nombre d'argument GET envoyé est de : ".$i;   

?>
