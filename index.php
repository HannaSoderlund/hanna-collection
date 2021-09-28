<?php

// create a PDO connection
$db = new PDO('mysql:host=db; dbname=hanna-collection', 'root', 'password');

// Write the SQL query to retrieve all the collection items
$query = $db->prepare("SELECT * FROM `vegetables`");
$query->execute();
$results = $query->fetchAll();

//Create a loop over the results to echo out the various stats for each item
foreach($results as $vegetable) {
    echo $vegetable['id'] . ' - ' .
        $vegetable['common-name'] . ' - ' .
        $vegetable['cultivar-name'] . ' - ' .
        $vegetable['family'] . ' - ' .
        $vegetable['likes'] . ' - ' .
        $vegetable['dislikes'] . ' - ' .'<br>';
}
