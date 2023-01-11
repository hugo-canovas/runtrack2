<?php

    if(isset($_POST['login'])){
        setcookie('prenom', $_POST['prenom'], time()+3600);
        header("Refresh:0");
    }else if(isset($_POST['logout'])){
        setcookie('prenom', '', time()-3600);
        header("Refresh:0"); 
    } 

    if(isset($_COOKIE['prenom'])){
        echo "Bonjour ".$_COOKIE['prenom']." !";
        echo 
            "<form action='index.php' method='post'>
                <button type='submit' name='logout'>Déconnexion</button>
            </form>";
            
    }else{
        echo 
            "<form action='index.php' method='post'>
                <input type='text' name='prenom'>
                <button type='submit' name='login'>Connexion</button>
            </form>";   
    }
    
?>
