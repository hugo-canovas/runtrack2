<?php

    session_start();
?> 
<form action="index.php" method="get">
    <input type="text" name="surname">
    <input type="submit" name="valider">
    <input type="submit" name="reset" value="reset">
</form>


<?php  

    if(isset($_GET['valider'])){
        $_SESSION['prenom'][] = $_GET['surname'];
        if(isset($_SESSION['prenom'])){
            foreach($_SESSION['prenom'] as $value){
                echo $value."<br>";
            }
        }

        
    }else{
        echo "Veuillez rentrer un prénom!";
    }

    if(isset($_GET['reset'])){
        unset($_SESSION['prenom']);
        // if(isset($_SESSION['prenom'])){
        //     foreach($_SESSION['prenom'] as $value){
        //         unset($_SESSION['prenom'][$value]);
        //     }
        // }
        session_destroy();
    }
    

?>

