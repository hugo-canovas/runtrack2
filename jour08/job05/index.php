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
?>
            <form action='index.php' method='post'>
                <button type='submit' name='logout'>Déconnexion</button>
            </form>
<?php 
    }
    
    if(isset($_COOKIE['joueur_1']) && isset($_COOKIE['joueur_2'])){ 
?>
        <table style='width: 500px; height: 500px;'>
            <tr>
                <form method='post' action='index.php'>
<?php
                    if(isset($_POST['1'])){
                        setcookie('hg', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['hg'])){
?>
                        <td><?php echo $_COOKIE['hg'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='1' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }

                    if(isset($_POST['2'])){
                        setcookie('hm', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['hm'])){
?>
                        <td><?php echo $_COOKIE['hm'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='2' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }

                    if(isset($_POST['3'])){
                        setcookie('hd', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['hd'])){
?>
                        <td><?php echo $_COOKIE['hd'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='3' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }
?>
            </tr>
            <tr>
<?php

                    if(isset($_POST['4'])){
                        setcookie('mg', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['mg'])){
?>
                        <td><?php echo $_COOKIE['mg'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='4' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }

                    if(isset($_POST['5'])){
                        setcookie('mm', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['mm'])){
?>
                        <td><?php echo $_COOKIE['mm'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='5' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }

                    if(isset($_POST['6'])){
                        setcookie('md', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['md'])){
?>
                        <td><?php echo $_COOKIE['md'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='6' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }
?>
            </tr>
            <tr>
<?php
                   
                    if(isset($_POST['7'])){
                        setcookie('bg', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['bg'])){
?>
                        <td><?php echo $_COOKIE['bg'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='7' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }
              
                    if(isset($_POST['8'])){
                        setcookie('bm', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['bm'])){
?>
                        <td><?php echo $_COOKIE['bm'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='8' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }
  
                    if(isset($_POST['9'])){
                        setcookie('bd', "X", time()+3600);
                        header("Refresh:0");
                    }

                    if(isset($_COOKIE['bd'])){
?>
                        <td><?php echo $_COOKIE['bd'] ?></td>
<?php
                    }else{
?>
                        <td><button type='submit' name='9' value='-' style='width: 75px;height: 75px;'></button></td>
<?php
                    }
?>
            </tr>
        </table>
        <button type='submit' name='restart'>Rejouer</button>
    </form>
<?php
                    if(isset($_POST['restart'])){
                        setcookie('hg', '', time()+3600);
                        setcookie('hm', '', time()+3600);
                        setcookie('hd', '', time()+3600);
                        setcookie('mg', '', time()+3600);
                        setcookie('mm', '', time()+3600);
                        setcookie('md', '', time()+3600);
                        setcookie('bg', '', time()+3600);
                        setcookie('bm', '', time()+3600);
                        setcookie('bd', '', time()+3600);
                        header('Refresh:0');
                    }
    }else{ ?>
        <form action='index.php' method='post'>
                <input type='text' name='joueur_1'>
                <input type='text' name='joueur_2'>
                <button type='submit' name='login'>Valider</button>
            </form>
<?php   
    }

    
?>