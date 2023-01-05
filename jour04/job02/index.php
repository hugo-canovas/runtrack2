<form action="index.php" method="get">

    <input type="text" name="name" placeholder="Entrez votre nom">
    <input type="text" name="username" placeholder="Entrez votre prénom">
    <input type="submit" value="Envoyer">

</form>

        <table>
            <th>
                <tr>
                    <td>argument</td>
                    <td>valeur</td>
                </tr>
            </th>
            <tr>
                <td>Nom</td>
                <td><?php if(isset($_GET['name']) != ""){ echo $_GET["name"];} ?></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><?php if(isset($_GET['username']) != ""){ echo $_GET["username"];} ?></td>
            </tr>
        </table>


<style>
    table, td{
        border: 1px solid;
    }
</style>