<?php 
    $name = "nbvisites";
    
    setcookie($name, $_COOKIE['nbvisites']+1, time()+3600);

    
    if(!isset($_COOKIE)){
        echo "il n'y a pas de cookie";
    }else{
        $_COOKIE['nbvisites'] = $_COOKIE['nbvisites']+1;
        echo $_COOKIE['nbvisites'];
    }

    if(isset($_POST['reset'])){
        setcookie('nbvisites',"", time()-3600);
        header("Refresh:0");
    }
?>

<form action="index.php" method="post">
    <input type="submit" name="reset">
</form>