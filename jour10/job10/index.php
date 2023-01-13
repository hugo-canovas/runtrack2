<?php

    try{
        $mysql = new mysqli('localhost','root','','jour09');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    $request = $mysql->query("SELECT * FROM salles ORDER BY capacite ASC");
?>
<table>
    <thead>
        <tr>
            <td>Nom</td>
            <td>étages</td>
            <td>Capacité</td>
        </tr>
    </thead>
    <tbody>
<?php
        foreach($request as $row){?>
            <tr>
                <td><?php print $row['nom']?></td>
                <td><?php print $row['id_etage']?></td>
                <td><?php print $row['capacite']?></td>
            </tr>
<?php
        }
?> 
    </tbody>
</table>