<?php

    for($i = 0; $i <= 100; $i++){
        if($i >= 0 && $i <= 20){
            echo '<i>'.$i.'</i></br>';
        } else if($i >= 25 && $i <= 50) {
            if($i == 42){
?>  
                <p>La Plateforme_</p></br>
<?php
            } else {
?>
                <u><?php echo $i;?></u></br>
<?php
            }
        } else {
            echo $i.'</br>';
        }
    }
?>