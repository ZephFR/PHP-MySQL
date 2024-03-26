<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster</title>
</head>
<body>
    <main>
        <form action="addtweet.php" method="POST">
            <input type="hidden" name="form" value="addTweet">
            <label type="content">Contenu</label>
            <input type="text" name="content" id="contenu">
            <button type="submit">Send</button>
        </form>
    </main>

    <?php require 'database.php';

    $requete = $database->prepare("SELECT * FROM 'tweet' INNER JOIN 'user' ON tweet.user_id = user.id ORDER BY 'tweet'.'idTweet' DESC");
    $requete->execute();
    $tweets = $requete ->fetchAll(PDO::FETCH_ASSOC);

    foreach($tweets as $tweet) : ?>

    <form action="delTweet.php" method="POST">
        
        <input type="hidden" name="form" value="deleteTweet">
        <input type="hidden" name="delete" value="<?php echo $tweet['idTweet']; ?>">

        <?php echo '<li>' . $tweet['idTweet'] . '</li>'; ?>
        <?php echo '<li>' . $tweet['content'] . '</li>'; ?>
        <?php echo '<li>' . $tweet['name'] . '</li>'; ?>

        <button type="submit">Delete Tweet</button>
    </form>
    <?php endforeach; ?>
</body>
</html>