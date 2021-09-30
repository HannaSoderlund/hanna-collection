<?php

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

<h1>Add a new vegetable!</h1>
<section>
    <form method="post" action="validation.php">
        <label for ="common-name">Common name:</label>
        <br>
        <input type="text" id="common-name" name="common-name" maxlength="255" placeholder="Vegetable name" required>
        <br>
        <br>
        <label for="cultivar-name">Cultivar name:</label>
        <br>
        <input type="text" id="cultivar-name" name="cultivar-name" maxlength="255" placeholder="Cultivar or variety" required>
        <br>
        <br>
        <label for ="family">Plant family:</label>
        <br>
        <select id="family" name="family" required>
            <option value="Amarylidaceae">Amarylidaceae</option>
            <option value="Apiaceae">Apiaceae</option>
            <option value="Asteraceae">Asteraceae</option>
            <option value="Brassicaceae">Brassicaceae</option>
            <option value="Chenopodiaceae">Chenopodiaceae</option>
            <option value="Fabaceae">Fabaceae</option>
            <option value="Solanaceae">Solanaceae</option>
        </select>
        <br>
        <br>
        <label for="likes">Likes:</label>
        <br>
        <input type="text" id="likes" name="likes" maxlength="255" placeholder="e.g. soil type, conditions" required>
        <br>
        <br>
        <label for=“dislikes”>Dislikes:</label>
        <br>
        <input type="text" id="dislikes" name="dislikes" maxlength="255" placeholder="e.g. particular pests" required>
        <br>
        <br>
        <label for="image">Specify file name:</label>
        <br>
        <input type="text" id="image" name="image" maxlength="255" placeholder="e.g. tomato.jpeg" required>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit the vegetable!">
    </form>
</section>
</body>
</html>