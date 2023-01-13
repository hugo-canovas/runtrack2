<?php

    try{
        $mysql = new mysqli('localhost','root','','jour09');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    $request = $mysql->query("SELECT COUNT(id) as 'nb_etudiants'  FROM etudiants");

?>
<table>
    <thead>
        <tr>
            <td>Nombre d'etudiants</td>
        </tr>
    </thead>
    <tbody>
<?php
        foreach($request as $row){?>
            <tr>
                <td><?php print $row['nb_etudiants']?></td>
            </tr>
<?php
        }
?> 
    </tbody>
</table>
