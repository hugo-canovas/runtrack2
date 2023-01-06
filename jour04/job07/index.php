<form action="index.php" method="get">
        <input type="text" name="hauteur" placeholder="Hauteur">
        <input type="text" name="largeur" placeholder="Largeur">
        <input type="submit" value="Valider">
</form>

<?php
        if(isset($_GET['hauteur']) && isset($_GET['largeur']) && (int)$_GET['hauteur']!=0 && (int)$_GET['largeur']!=0){
                if($_GET['hauteur'] * 2 == $_GET['largeur']){
                        for($i=0;$i<=$_GET['hauteur'];$i++){  
                                for($k=$_GET['hauteur']-1;$k>=$i;$k--){  
                                        echo "&nbsp;&nbsp;";  
                                } 
                                echo "/"; 
                                for($j=1;$j<=$i;$j++){  
                                        echo "&nbsp;_&nbsp;";  
                                }  
                                echo "\</br>";        
                        }

                        for ($i=0; $i<=$_GET['hauteur']; $i++){  
                                for($j=0; $j <= $_GET['largeur']; $j++); 
                                echo "|";

                                for($j=0; $j <= $_GET['largeur']; $j++){  
                                        echo "_";  
                                }  
                                echo "|</br>";  
                        }
                }else{
                        $_GET['hauteur'] += ($_GET['largeur'] - $_GET['hauteur']);
                        $_GET['hauteur'] = $_GET['hauteur'] / 2;
                        
                        for($i=0;$i<=$_GET['hauteur'];$i++){  
                                for($k=$_GET['hauteur']-1;$k>=$i;$k--){  
                                        echo "&nbsp;&nbsp;";  
                                } 
                                echo "/"; 
                                for($j=1;$j<=$i;$j++){  
                                        echo "&nbsp;_&nbsp;";  
                                }  
                                echo "\</br>";        
                        }

                        for ($i=0; $i<=$_GET['hauteur']; $i++){  
                                for($j=0; $j <= $_GET['largeur']; $j++); 
                                echo "|";

                                for($j=0; $j <= $_GET['largeur']; $j++){  
                                        echo "_";  
                                }  
                                echo "|</br>";  
                        }
                
                }     
        }  

?>
