<?php
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'addTweet')
{
    if ($_POST['content'] != '') 
    {
        $newTweet = ['content' => $_POST['content'], ];
        $requete = $database->prepare("INSERT INTO tweet (content) VALUES (:content)");

        if( $requete->execute($newTweet) ) {
            echo 'Tweet succesfully added';
        }
        else {
            echo 'Error while adding';
        }
    }
}

header('Location: http://localhost/Twt_PERROTM/Main.php');
exit();
?>