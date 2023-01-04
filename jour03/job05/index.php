<?php

    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
    $voyelle = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    $spec = [" ", "'", "."];
    $dic = [
                "voyelles" => 0,
                "consonnes" => 0
    ];
    $i = 0;
    $c = 0;

    while(isset($str[$i])){
        foreach($voyelle as $key => $value){
            if($str[$i] == $voyelle[$key]){
                $dic["voyelles"] += 1;  
            }
        }
        foreach($spec as $key => $value){
            if($str[$i] == $spec[$key]){
                $c++;
            }
        }
        $i++;
    }
    $dic["consonnes"] = $i - ($dic["voyelles"] + $c);
?>
    <table>
        <th>
            <tr>
                <td>Consonnes</td>
                <td>Voyelles</td>
            </tr>
        </th>
        <tr>
            <td><?php echo $dic["consonnes"] ?></td>
            <td><?php  echo $dic["voyelles"] ?></td>
        </tr>
    </table>





