<?php
try {
    $database = new PDO('mysql:host=localhost;dbname=twitter','root','root');
}

catch (PDOException $e) {
    die('Site non disponible');
}
?>