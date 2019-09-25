<?php

// tweet?id=<script>alert("xss";)</script>

//$tweetId = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$tweetId = filter_input(INPUT_GET, 'id' , FILTER_VALIDATE_INT);


include 'include/dbinfo.php';

try {
    $dbh = new PDO(
        'mysql:host=localhost;charset=utf8mb4;dbname=' . $databasename . '',
        $username,
         $password
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$sth = $dbh->prepare('SELECT tweet.*, users.name from tweet
            JOIN users
            ON tweet.user_id = users.id
            WHERE tweet.id =' . $tweetId);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);
include 'views/tweet_layout.php';
?>
