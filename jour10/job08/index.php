<?php

    try{
        $mysql = new mysqli('localhost','root','','jour09');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    $request = $mysql->query("SELECT SUM(capacite) AS 'capacite_totale' FROM salles");
?>
<table>
    <thead>
        <tr>
            <td>Capacité totale des salles</td>
        </tr>
    </thead>
    <tbody>
<?php
        foreach($request as $row){?>
            <tr>
                <td><?php print $row['capacite_totale']?></td>
            </tr>
<?php
        }
?> 
    </tbody>
</table>