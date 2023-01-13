<?php

    if(isset($_POST['login'])){
        setcookie('joueur_1', $_POST['joueur_1'], time()+3600);
        setcookie('joueur_2', $_POST['joueur_2'], time()+3600);
        header("Refresh:0");
    }else if(isset($_POST['logout'])){
        setcookie('joueur_1', '', time()-3600);
        setcookie('joueur_2', '', time()-3600);
        header("Refresh:0");
    }

    if(isset($_COOKIE['joueur_1']) && isset($_COOKIE['joueur_2'])){
        echo "le joueur ".$_COOKIE['joueur_1']." commence la partie !";
        echo 
            "<form action='index.php' method='post'>
                <button type='submit' name='logout'>Déconnexion</button>
            </form>";
        echo "    
                <table style='width: 500px; height: 500px;'>
                    <tr>";
                        if(isset($_GET['1'])){
                            echo "<td>X</td>";
                        }else{
                            echo "
                                <form method='get' action='index.php'>
                                    <td><button type='submit' name='1' value='-' style='width: 75px;height: 75px;'></button></td>
                                <form>";
                        }
                        if(isset($_GET['2'])){
                            echo "<td>X</td>";
                        }else{
                            echo "
                                <form method='get' action='index.php'>    
                                    <td><button type='submit' name='2' value='-' style='width: 75px;height: 75px;'></button></td>
                                </form>";
                        }
        echo "
            
                        
                        
                        <td><button type='submit' name='3' value='-' style='width: 75px;height: 75px;'></button></td>
                    </tr>
                    <tr>
                        <td><button type='submit' name='4' value='-' style='width: 75px;height: 75px;'></button></td>
                        <td><button type='submit' name='5' value='-' style='width: 75px;height: 75px;'></button></td>
                        <td><button type='submit' name='6' value='-' style='width: 75px;height: 75px;'></button></td>
                    </tr>
                    <tr>
                        <td><button type='submit' name='7' value='-' style='width: 75px;height: 75px;'></button></td>
                        <td><button type='submit' name='8' value='-' style='width: 75px;height: 75px;'></button></td>
                        <td><button type='submit' name='9' value='-' style='width: 75px;height: 75px;'></button></td>
                    </tr>
                </table>
            <form>"; 

    }else{
        echo 
            "<form action='index.php' method='post'>
                <input type='text' name='joueur_1'>
                <input type='text' name='joueur_2'>
                <button type='submit' name='login'>Valider</button>
            </form>";   
    }

    
    



?>
