<?php

    try{
        $mysql = new mysqli('localhost','root','','jour09');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    $request = $mysql->query("SELECT salles.nom AS 'nom_salle', etages.nom AS 'nom_etage' FROM salles INNER JOIN `etages` ON etages.id = salles.id_etage");
?>
<table>
    <thead>
        <tr>
            <td>Salles</td>
            <td>Etages</td>
        </tr>
    </thead>
    <tbody>
<?php
        foreach($request as $row){?>
            <tr>
                <td><?php print $row['nom_salle']?></td>
                <td><?php print $row['nom_etage']?></td>
            </tr>
<?php
        }
?> 
    </tbody>
</table>
