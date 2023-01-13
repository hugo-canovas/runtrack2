<form action="index.php" method="get">
    <select name="style" id="style">
        <option value="">Choisissez un style CSS</option>
        <option value="style1">1</option>
        <option value="style2">2</option>
        <option value="style3">3</option>
    </select>
    <button type="submit" name='valider'>Valider</button>
</form>

<?php
if(isset($_GET['valider'])){
    $myStyle = $_GET['style'];

    if($myStyle == "style1"){?>
        <link rel="stylesheet" href="./style1.css"> 
<?php        
    }else if($myStyle == "style2"){?>
        <link rel="stylesheet" href="./style2.css">
<?php
    }else if($myStyle == "style3"){?>
        <link rel="stylesheet" href="./style3.css">
<?php
    }
}

?>
