<?php

    try{
        $mysql = new mysqli('localhost','root','','jour09');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    $request = $mysql->query("SELECT AVG(capacite) AS 'capacite_moyenne' FROM salles");
?>
<table>
    <thead>
        <tr>
            <td>Capacité moyenne des salles</td>
        </tr>
    </thead>
    <tbody>
<?php
        foreach($request as $row){?>
            <tr>
                <td><?php print $row['capacite_moyenne']?></td>
            </tr>
<?php
        }
?> 
    </tbody>
</table>