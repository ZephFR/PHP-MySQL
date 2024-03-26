<?php
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'deleteTweet') {
    $tweetToDelete = [
        'idTweet' => $_POST['delete']
    ];
}

header('Location: http://localhost/Twt_PERROTM/MainPage.php');
exit();
?>