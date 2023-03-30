<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
</head>
<body>

<?php 
    if(!isset($_SESSION['symbol'])){
        $_SESSION['symbol'] = "X";
    }
    if(!isset($_COOKIE['round'])){
        setcookie('round', 0, time()+3600);
    }

// CONNEXION ET DECONNEXION DES JOUEURS

    if(isset($_POST['login'])){
        $_SESSION['joueur_1'] = $_POST['joueur_1'];
        $_SESSION['joueur_2'] = $_POST['joueur_2'];
        header("Refresh:0");
    }else if(isset($_POST['logout'])){
        unset($_SESSION['joueur_1']);
        unset($_SESSION['joueur_2']);
        session_destroy();
        header("Refresh:0");
    }

    if(isset($_POST['logout'])){
        foreach($_COOKIE as $cookie_case => $cookie_value){
            setcookie($cookie_case, '', time()-3600);
            unset($_COOKIE[$cookie_case]);
            header('Refresh:0');
        }
    }

// AFFICHAGE DU TABLEAU SI JOUEUR CONNECTE SINON FORMULAIRE DE CONNEXION
    if(isset($_SESSION['joueur_1'], $_SESSION['joueur_2']) && $_SESSION['joueur_1'] != "" && $_SESSION['joueur_2'] != ""){ 
?>
    <div>le joueur <?php echo $_SESSION['joueur_1'] ?> commence la partie !</div>

   <form action='index.php' method='post'>
        <button type='submit' name='logout'>Déconnexion</button>
    </form>

    <form method='post' action='index.php'>
        <table style='width: 500px; height: 500px;'>
<?php              
                $case = 1;
                for($ligne = 0; $ligne < 3; $ligne++){
?>
                    <tr style="width: 300px; height: 100px;">
<?php
                        for($colone = 0; $colone < 3; $colone++){  
?>
                            <td style="height: 100px; width: 100px;">
                                <button style ="height: 100%; width: 100%;" <?php disabled($case) ?> type="submit" name="<?php echo $case ?>" value=""  style="width: 50px; height: 50px;"><div style ="height: 100%; width: 100%;"><?php affichage($case) ?></div></button>
                            </td>
<?php  
                            $case++;
                            
                            if(isset($_POST['restart'])){
                                setcookie(1, '', time()-3600);
                                setcookie($case, '', time()-3600);
                                setcookie('round', '', time()-3600);
                                unset($_COOKIE[$case]);
                                header('Refresh:0');
                            }
                        }
?>
                    </tr>
<?php 
                }
?>
                <br/>
        </table>
        <button type='submit' name='restart'>Rejouer</button>
    </form>

<?php
    endGame();
    }else{ 
?>     
        <form action='index.php' method='post'>
            <input type='text' name='joueur_1'>
            <input type='text' name='joueur_2'>
            <button type='submit' name='login'>Valider</button>
        </form>
<?php 
    }
?>

<?php 
// Attribution des X ou O suivant le tour
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
?>

<?php 
// affichage de X ou O dans les cases
    function affichage($case){
        if(isset($_COOKIE[$case])){
            echo $_COOKIE[$case];
        }
    }
?>

<?php
// Disable les cases après sélection ou arrêt du jeu
    function disabled($case){
        if(isset($_COOKIE[$case])){
            echo 'disabled';
        } else if(winner()){
            echo 'disabled';
        }
    }
?>

<?php
// Compteur de round
    function playerRound($case){
        if(isset($_POST[$case])){
            attributionSymbol($case);
            if(isset($_COOKIE['round'])){
                setcookie('round', $_COOKIE['round']+1, time()+3600);
            }
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

<?php
// conditions de victoire
function winner(){
    if(isset($_COOKIE[1], $_COOKIE[2], $_COOKIE[3])){
        if($_COOKIE[1] == "X" && $_COOKIE[1] == $_COOKIE[2] && $_COOKIE[1] == $_COOKIE[3]){
            return 1;
        }else if($_COOKIE[1] == "O" && $_COOKIE[1] == $_COOKIE[2] && $_COOKIE[1] == $_COOKIE[3]){
            return 2;
        }
    }
    if(isset($_COOKIE[4], $_COOKIE[5], $_COOKIE[6])){
        if($_COOKIE[4] == "X" && $_COOKIE[4] == $_COOKIE[5] && $_COOKIE[4] == $_COOKIE[6]){
            return 1;
        }else if($_COOKIE[4] == "O" && $_COOKIE[4] == $_COOKIE[5] && $_COOKIE[4] == $_COOKIE[6]){
            return 2;
        }
    }
    if(isset($_COOKIE[7], $_COOKIE[8], $_COOKIE[9])){
        if($_COOKIE[7] == "X" && $_COOKIE[7] == $_COOKIE[8] && $_COOKIE[7] == $_COOKIE[9]){
            return 1;
        }else if($_COOKIE[7] == "O" && $_COOKIE[7] == $_COOKIE[8] && $_COOKIE[7] == $_COOKIE[9]){
            return 2;
        }
    }
    if(isset($_COOKIE[1], $_COOKIE[4], $_COOKIE[7])){
        if($_COOKIE[1] == "X" && $_COOKIE[1] == $_COOKIE[4] && $_COOKIE[1] == $_COOKIE[7]){
            return 1;
        }else if($_COOKIE[1] == "O" && $_COOKIE[1] == $_COOKIE[4] && $_COOKIE[1] == $_COOKIE[7]){
            return 2;
        }
    }
    if(isset($_COOKIE[2], $_COOKIE[5], $_COOKIE[8])){
        if($_COOKIE[2] == "X" && $_COOKIE[2] == $_COOKIE[5] && $_COOKIE[2] == $_COOKIE[8]){
            return 1;
        }else if($_COOKIE[2] == "O" && $_COOKIE[2] == $_COOKIE[5] && $_COOKIE[2] == $_COOKIE[8]){
            return 2;
        }
    }
    if(isset($_COOKIE[3], $_COOKIE[6], $_COOKIE[9])){
        if($_COOKIE[3] == "X" && $_COOKIE[3] == $_COOKIE[6] && $_COOKIE[3] == $_COOKIE[9]){
            return 1;
        }else if($_COOKIE[3] == "O" && $_COOKIE[3] == $_COOKIE[6] && $_COOKIE[3] == $_COOKIE[9]){
            return 2;
        }
    }
    if(isset($_COOKIE[1], $_COOKIE[5], $_COOKIE[9])){
        if($_COOKIE[1] == "X" && $_COOKIE[1] == $_COOKIE[5] && $_COOKIE[1] == $_COOKIE[9]){
            return 1;
        }else if($_COOKIE[1] == "O" && $_COOKIE[1] == $_COOKIE[5] && $_COOKIE[1] == $_COOKIE[9]){
            return 2;
        }
    }
    if(isset($_COOKIE[3], $_COOKIE[5], $_COOKIE[7])){
        if($_COOKIE[3] == "X" && $_COOKIE[3] == $_COOKIE[5] && $_COOKIE[3] == $_COOKIE[7]){
            return 1;
        }else if($_COOKIE[3] == "O" && $_COOKIE[3] == $_COOKIE[5] && $_COOKIE[3] == $_COOKIE[7]){
            return 2;
        }
    }
}
?>

<?php
// Attribution de victoire/égalité    
    function endGame(){
        if(winner()== 1){
            echo 'X est le gagnant';
        }else if(winner()== 2){
            echo 'O est le gagnant';
        }else if(isset($_COOKIE['round']) && $_COOKIE['round'] == 9){
            echo 'Match nul';
        }
    }
?>
</body>
</html>