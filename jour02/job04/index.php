<?php 

    for($i = 1; $i <= 100; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
?>
            <p>FizzBuzz</p>
<?php        
        } else if($i % 3 == 0){
?>
            <p>Fizz</p>
<?php            
        } else if($i % 5 == 0){
?>
            <p>Buzz</p>
<?php           
        } else {
            echo $i.'</br>';
        }
}
?>

