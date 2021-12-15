<?php

require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);
$newFriend = "INSERT INTO friend (lastname,firstname) VALUES ('$_POST[mamadou]','$_POST[abdul]')";
$statement = $pdo->exec($newFriend);
var_dump($statement);
/*$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_OBJ);
$query = "INSERT INTO friend (firstname, lastname) VALUE ('Chandler', 'Bing')";
$statement = $pdo->exec($query);
print_r($friends);

foreach($friends as $friend) {
    echo "<ul><li> $friend->firstname $friend->lastname</li></ul>" ;
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
Name : <input type="text" name="mamadou" id="name" placeholder="Entrez votre nom" /><br />
<label for="lastname"></label>
lastname : <input type="text" name="abdul" placeholder="Entrer votre prenom" /><br />

<input type="submit" value="Submit" />
</form>
</body>
</html>