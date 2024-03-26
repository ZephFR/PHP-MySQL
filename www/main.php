<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alors ça tweet?</title>
</head>
<body>
    <main>
        <form action="add.php" method="POST">
            <input type="hidden" name="form" value="addUser">

            <label for="name">Nom</label>
            <input type="text" name="name" id="name">

            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <label for="password">Mot de Passe</label>
            <input type="password" name="password" id="password">

            <button type="submit">Confirmer</button>
        </form>
    </main>
    <?php 
    require 'database.php';
    $request = $database->prepare("SELECT id, nom, email FROM user");
    $request->execute();
    $users = $request->fetchAll(PDO::FETCH_ASSOC);

    foreach($users as $user) : ?>

    <form action="delete.php" method="POST">
        <input type="hidden" name="form" value="supprimer">
        <input type="hidden" name="delete" value="<?php echo $user["id"]; ?>">

        <?php echo '<li>' . $user['name'] . '' . $user['email'] . '</li>'; ?>

        <button type="submit">Supprimer</button>
    </form>
    <?php endforeach; ?>
</body>
</html>