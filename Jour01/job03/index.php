<?php
$boolean = true;
$int = 7;
$string = "hello world";
$float = 6.5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </tr>
        </thead>
        <tr>
            <td>
                <?php  echo gettype($boolean) ?>
            </td>
            <td>
                <?php echo '$boolean' ?>
            </td>
            <td>
                <?php echo $boolean ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php  echo gettype($int) ?>
            </td>
            <td>
                <?php echo '$int' ?>
            </td>
            <td>
                <?php echo $int ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php  echo gettype($string) ?>
            </td>
            <td>
                <?php echo '$string' ?>
            </td>
            <td>
                <?php echo $string ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php  echo gettype($float) ?>
            </td>
            <td>
                <?php echo '$float' ?>
            </td>
            <td>
                <?php echo $float ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php  echo gettype($int) ?>
            </td>
            <td>
                <?php echo '$int' ?>
            </td>
            <td>
                <?php echo $int ?>
            </td>
        </tr>
    </table>
</body>
</html>