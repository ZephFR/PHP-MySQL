<?php
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'supprimer')
{
    $userToDelete = [
        'id' => $_POST['delete']
    ];

    $requete = $database->prepare('DELETE FROM user WHERE id = :id');
    $requete->execute($userToDelete);
}

header('Location: http://localhost/Twt_PERROTM/Account.php');
exit();

?>