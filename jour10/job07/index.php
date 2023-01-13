<?php

    try{
        $mysql = new mysqli('localhost','root','','jour09');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    $request = $mysql->query("SELECT SUM(superficie) AS 'superficie_totale' FROM etages");

?>
<table>
    <thead>
        <tr>
            <td>Superficie des étages</td>
        </tr>
    </thead>
    <tbody>
<?php
        foreach($request as $row){?>
            <tr>
                <td><?php print $row['superficie_totale']?></td>
            </tr>
<?php
        }
?> 
    </tbody>
</table>