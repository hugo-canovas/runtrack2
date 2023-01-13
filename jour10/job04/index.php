<?php

    try{
        $mysql = new mysqli('localhost','root','','jour09');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    $request = $mysql->query("SELECT * FROM etudiants WHERE LEFT(prenom,1)='T'");

?>
<table>
    <thead>
        <tr>
            <td>Prénom</td>
            <td>Nom</td>
            <td>Naissance</td>
            <td>Sexe</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
<?php
        foreach($request as $row){?>
            <tr>
                <td><?php print $row['prenom']?></td>
                <td><?php print $row['nom']?></td>
                <td><?php print $row['naissance']?></td>
                <td><?php print $row['sexe']?></td>
                <td><?php print $row['email']?></td>
            </tr>
<?php
        }
?> 
    </tbody>
</table>