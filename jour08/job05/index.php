<?php

    session_start();
    
    if(!isset($_SESSION['symbol'])){
        $_SESSION['symbol'] = "X";
    }
    
// CONNEXION ET DECONNEXION DES JOUEURS

    if(isset($_POST['login'])){
        $_SESSION['joueur_1'] = $_POST['joueur_1'];
        $_SESSION['joueur_2'] = $_POST['joueur_2'];
        header("Refresh:0");
    }else if(isset($_POST['logout'])){
        unset($_SESSION['joueur_1']);
        unset($_SESSION['joueur_2']);
        
        header("Refresh:0");
    }

    
?>

<?php
// AFFICHAGE DU TABLEAU SI JOUEUR CONNECTE SINON FORMULAIRE DE CONNEXION

    if(isset($_SESSION['joueur_1']) && isset($_SESSION['joueur_2'])){ 
        echo "le joueur ".$_SESSION['joueur_1']." commence la partie !";
?>
        <form action='index.php' method='post'>
           <button type='submit' name='logout'>Déconnexion</button>
        </form>

        <form method='post' action='index.php'>
            <table style='width: 500px; height: 500px;'>
<?php               
                    $case = 1;
                    for($ligne = 0; $ligne < 3; $ligne++){
                        echo'<tr style="width: 300px; height: 100px;">';
                        for($colone = 0; $colone < 3; $colone++){  
?>
                            <td style="height: 100px; width: 100px;">
                                <button style ="height: 100%; width: 100%;" <?php disabled($case) ?> type="submit" name="<?php echo $case ?>" value=""  style="width: 50px; height: 50px;"><?php affichage($case) ?></button>
                            </td>
<?php
                            $case++;
                            
                            if(isset($_POST['restart'])){
                                setcookie(1, '', time()-3600);
                                setcookie($case, '', time()-3600);
                                unset($_COOKIE[$case]);
                                header('Refresh:0');
                            }
                        }
                        echo '</tr>';
                    }
                    echo "<br>";            
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

    function attributionSymbol($case){
        if($_SESSION['symbol'] == "X"){
            setcookie($case, $_SESSION['symbol'], time()+3600);
            $_SESSION['symbol'] = "O";
            header('Refresh:0');
        }else if($_SESSION['symbol'] == "O"){
            setcookie($case, $_SESSION['symbol'], time()+3600);
            $_SESSION['symbol'] = "X";
            header('Refresh:0');
        }
    }

    // echo $_SESSION['symbol'];

    function affichage($case){
        if(isset($_COOKIE[$case])){
            echo $_COOKIE[$case];
        }
    }

    function disabled($case){
        if(isset($_COOKIE[$case])){
            echo 'disabled';
        }
    }

    function playerRound($case){
        if(isset($_POST[$case])){
            attributionSymbol($case);
            
        }
    }

    playerRound(1);
    playerRound(2);
    playerRound(3);
    playerRound(4);
    playerRound(5);
    playerRound(6);
    playerRound(7);
    playerRound(8);
    playerRound(9);
    
?>


