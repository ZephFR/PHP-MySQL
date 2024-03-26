<?php
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'addUser')
{
    $newUser = [
        'name' => $_POST['name'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
    ];

    $requete = $database->prepare("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)");

    if ($requete->execute($newUser)) {
        echo 'User has been added';
    }
    else {
        echo 'Error while adding';
    }
}

header('Location = http://localhost/Twt_PERROTM/Account.php');
exit();
?>