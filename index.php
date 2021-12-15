<?php
require_once 'connec.php';
//liste des friends
$friends = $statement->fetchAll(PDO::FETCH_OBJ);

foreach($friends as $friend) {
    echo $friend->firstname . ' ' . $friend->lastname;
}


