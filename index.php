<?php

// create a PDO connection
$db = new PDO('mysql:host=db; dbname=hanna-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Write the SQL query to retrieve all the collection items
$query = $db->prepare("SELECT `common-name`, `cultivar-name`, `family`, `likes`, `dislikes`, `image` FROM `vegetables`");
$query->execute();
$results = $query->fetchAll();

//Create a loop over the results to echo out the various stats for each item

//foreach($results as $vegetable) {
//    echo
//        $vegetable['common-name'] . ' - ' .
//        $vegetable['cultivar-name'] . '<br>' .
//        'Family: ' . $vegetable['family'] . ' - ' .
//        'Likes: ' . $vegetable['likes'] . ' - ' . '<br>' .
//        'Dislikes: ' . $vegetable['dislikes'] . ' - ' .'<br>' . '<br>';
//}


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
    <?php

        $vegHtml = '';

        foreach($results as $vegetable) {
            $vegHtml .= '<div class="veg-card">';
            $vegHtml .= '<div class="veg-card-inner">';
            $vegHtml .= '<div class="veg-card-front">';
            $vegHtml .= '<img src="https://cdn.britannica.com/16/187216-050-CB57A09B/tomatoes-tomato-plant-Fruit-vegetable.jpg" alt="a picture of a vegetable" style="width:300px; height:300px;">';
            $vegHtml .= '</div>';
            $vegHtml .= '<div class="veg-card-back">';
            $vegHtml .= '<h3>' . $vegetable['common-name'] . '</h3>';
            $vegHtml .= '</div>';
            $vegHtml .= '</div>';
            $vegHtml .= '</div>';

        }

        echo $vegHtml;
    ?>

    </section>
</body>
</html>