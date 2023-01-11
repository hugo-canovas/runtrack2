<?php

    if(isset($_POST['login'])){
        setcookie('joueur_1', $_POST['joueur_1'],time()+3600);
        setcookie('Joueur_2', $_POST['joueur_2'], time()+3600);
    }


    

?>

<form action='index.php' method='post'>
    <input type='text' name='joueur_1'>
    <input type='text' name='joueur_2'>
    <button type='submit' name='login'>Valider</button>
</form>

<table style='width:500px; height: 500px;'>
    <tr>
        <td><button type='submit' name='1' value='-'></button></td>
        <td><button type='submit' name='2' value='-'></button></td>
        <td><button type='submit' name='3' value='-'></button></td>
    </tr>
    <tr>
        <td><button type='submit' name='4' value='-'></button></td>
        <td><button type='submit' name='5' value='-'></button></td>
        <td><button type='submit' name='6' value='-'></button></td>
    </tr>
    <tr>
        <td><button type='submit' name='7' value='-'></button></td>
        <td><button type='submit' name='8' value='-'></button></td>
        <td><button type='submit' name='9' value='-'></button></td>
    </tr>
</table>