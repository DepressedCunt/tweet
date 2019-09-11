<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>666</title>
</head>
<body>
    <div class="container">
        <h1>Tweets of hell</h1>
    <?php
include 'include/dbinfo.php';

try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=' . $databasename . '',
        $username,
         $password
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$sth = $dbh->prepare('SELECT * FROM tweet
            JOIN users
            ON tweet.user_id = users.id');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    //echo "<pre>" . print_r($row,1) . "</pre>";
    echo "<div>";
    echo "<h2>" . $row['body'] . "</h2>";
    echo "<p>" . $row ["name"] . "</p>";
    echo "</div>";
}

?>
    </div>
</body>
</html>