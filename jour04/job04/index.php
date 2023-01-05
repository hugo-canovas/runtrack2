<form action="index.php" method="POST">

    <input type="text" name="name" placeholder="Entrez votre nom">
    <input type="text" name="username" placeholder="Entrez votre prénom">
    <input type="submit" value="Envoyer">

</form>

<table>
    <th>
        <tr>
            <td>Arguments</td>
            <td>Valeurs</td>
        </tr>
    </th>
    <tbody>
        <tr>
            <td>Nom</td>
            <td><?php if(isset($_POST['name']) != ""){ echo $_POST['name']; } ?></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php if(isset($_POST['username']) != ""){ echo $_POST['username']; } ?></td>
        </tr>
    </tbody>
</table>
