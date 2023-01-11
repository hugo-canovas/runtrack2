<?php

    session_start();

    
    if(!isset($_SESSION['nbvisites'])){
        $_SESSION['nbvisites'] = 0;
        echo $_SESSION['nbvisites']."<br>";
        
    }else{
        $_SESSION['nbvisites']++;
        echo $_SESSION['nbvisites']."<br>";
    }
    
    
    if(isset($_POST['reset'])){
        unset($_SESSION['nbvisites']);
        session_destroy();
        header("Refresh:0");
    }
    

?>
    <form action="index.php" method="post">
        <input type="submit" name="reset">
        <?php 
        // if(isset($_GET['reset'])){
        //     unset($_SESSION['nbvisites']);
        //     session_destroy();
        //     header('location : index.php');
        // }

        ?>
    </form>




