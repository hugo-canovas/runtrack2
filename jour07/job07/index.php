<form action="index.php" method="get">
    <input type="text" name="str">
    <select name="fonction" id="fonction">
        <option value="">Choisissez une option</option>
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <button type="submit">Valider</button>
</form>

<?php

    if(isset($_GET["str"]) != ''){
        $str = $_GET['str'];

        function gras($str){
            $select = $_GET['fonction'];
            $maj= ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
            if($select == "gras"){
               for($i = 0; isset($maj[$i]); $i++){
                    if($maj[$i] == $str[0]){
                        $str = "<b>".$str."</br>";
                    }
               }
                return $str; 
            }  
        }
        echo gras($str); 

        function cesar($str, $decalage){
            $select = $_GET['fonction'];
            // $decalage = $decalage;
            $maj = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
            $min = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
            if($select == "cesar"){
                for($i=0; isset($str[$i]); $i++){
                    for($j = 0; isset($maj[$j]); $j++){
                        if($str[$i] == $maj[$j]){
                            echo $maj[($j+$decalage) % 26];
                        }
                    }
                    for($k=0; isset($min[$k]); $k++){
                        if($str[$i]== $min[$k]){
                            echo $min[($k+$decalage) % 26];
                        }
                    }                      
                }              
            }  
        }
        echo cesar($str, 2);

        function plateforme($str){
            $me = $str[-2].$str[-1];
            if($me == "me"){
                echo $str."_";
            }
        }

        echo plateforme($str);
}
    

    

    

    

    

    


?>