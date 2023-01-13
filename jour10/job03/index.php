<?php

    try{
        $mysql = new mysqli('localhost','root','','jour09');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    $request = $mysql->query("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");

?>

<table>
    <thead>
        <tr>
            <td>Prénom</td>
            <td>Nom</td>
            <td>Naissance</td>
        </tr>
    </thead>
    <tbody>
<?php
        foreach($request as $row){?>
            <tr>
                <td><?php print $row['prenom']?></td>
                <td><?php print $row['nom']?></td>
                <td><?php print $row['naissance']?></td>
            </tr>
<?php
        }
?> 
    </tbody>
</table>