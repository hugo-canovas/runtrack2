<?php
    $i = 1;
    $round = 1;
    $j1 = "X";
    $j2 = "O";
// CONNEXION ET DECONNEXION DES JOUEURS

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
?>
            <form action='index.php' method='post'>
                <button type='submit' name='logout'>Déconnexion</button>
            </form>
<?php 
    }
?>

<?php
// AFFICHAGE DU TABLEAU SI JOUEUR CONNECTE SINON FORMULAIRE DE CONNEXION

    if(isset($_COOKIE['joueur_1']) && isset($_COOKIE['joueur_2'])){ 
?>
        <table style='width: 500px; height: 500px;'>
                <form method='post' action='index.php'>
<?php               
                    for($ligne = 0; $ligne < 3; $ligne++){
                        echo'<tr style="width: 300px; height: 100px;">';
                        for($colone = 0; $colone < 3; $colone++){  
                            if(isset($_POST[$i])){ 
                                setcookie($i, $i, time()+3600);
                                header('Refresh:0');
                            }else if(isset($_POST['restart'])){
                                setcookie($i, '', time()-3600);
                                unset($_COOKIE[$i]);
                                header('Refresh:0');
                            }

                            if(isset($_COOKIE[$i])){
                                $case = $i;
                                if($round == 1){
                                    echo $case;
                                    setcookie($case, $j1, time()+3600);                     
                                    echo '<td>'.$j1.'</td>';         
                                    $round++;
                                }else if($round == 2){
                                    setcookie($case, $j2, time()+3600);
                                    echo $case;
                                    echo '<td>'.$j2.'</td>';
                                    $round--;
                                }
                            }else{
                                echo '<td style="height: 100px; width: 100px;"><button style ="height: 100%; width: 100%;" type="submit" name="'.$i.'" style="width: 50px; height: 50px;"></button></td>';
                            }
                           $i++;                 
                        }
                        echo "<br>";
                        echo '</tr>';
                    }
                   
                    
?>    
        </table>
        <button type='submit' name='restart'>Rejouer</button>
    </form>
<?php
    }else{ ?>
        <form action='index.php' method='post'>
                <input type='text' name='joueur_1'>
                <input type='text' name='joueur_2'>
                <button type='submit' name='login'>Valider</button>
            </form>
<?php   
    }
?>

<?php 

    
?>


