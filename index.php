<?php

require 'functions.php';

$db = getDatabase();
$vegetables = retrieveVeg($db);
$vegetableCard = showVeg($vegetables);

?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Hanna's Allotment Planner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <h1>Hanna's Allotment Planner</h1>
    <section>
    <?php echo $vegetableCard; ?>
    </section>
</body>
</html>