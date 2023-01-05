<form action="index.php" method="post">
    <input type="text" name="username" placeholder="Entrez votre pseudo">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="Envoyer">
</form>

<?php

    if($_POST != NULL){
        if($_POST['username'] == "John" && $_POST['password'] == "Rambo"){
            echo "C'est pas ma guerre.";
        }else{
            echo "Votre pire cauchemar.";
        }
    }    

?>