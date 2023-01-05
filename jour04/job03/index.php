<form action="index.php" method="post">   
    <input name="name" placeholder="Entrez votre nom" type="text">
    <input name="username" placeholder="Entrez votre prénom" type="text">
    <input value="Envoyer" type="submit">
</form>

<?php

    $i=0;
    foreach($_POST as $key => $value){
        if(isset($_POST[$key]) != ""){
            $i++;
        }
    }

    echo "le nombre d'argument POST envoyé est de : ".$i;   

?>