<?php

function getDatabase() : PDO {
    $db = new PDO('mysql:host=db; dbname=hanna-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function retrieveVeg($db) : array {
    $query = $db->prepare("SELECT `common-name`, `cultivar-name`, `family`, `likes`, `dislikes`, `image` FROM `vegetables`");
    $query->execute();
    return $query->fetchAll();
}

function showVeg(array $results) : string {
    $vegHtml = '';
    if (empty($results)) {
        $vegHtml = 'Error';
    }

    foreach ($results as $vegetable) {
        $vegHtml .= '<div class="veg-card">';
        $vegHtml .= '<div class="veg-card-inner">';
        $vegHtml .= '<div class="veg-card-front">';
        $vegHtml .= '<img src="images/' . $vegetable['image'] . '" style="width:300px; height:300px;' . '"/>';
        $vegHtml .= '</div>';
        $vegHtml .= '<div class="veg-card-back">';
        $vegHtml .= '<h3>' . $vegetable['common-name'] . ' - ' . $vegetable['cultivar-name'] . '</h3>';
        $vegHtml .= '<p>' . 'Family: ' . $vegetable['family'] . '</p>';
        $vegHtml .= '<p>' . 'Likes: ' . '<br>' . $vegetable['likes'] . '</p>';
        $vegHtml .= '<p>' . 'Dislikes: ' . '<br>' . $vegetable['dislikes'] . '</p>';
        $vegHtml .= '</div>';
        $vegHtml .= '</div>';
        $vegHtml .= '</div>';
    }
    return $vegHtml;
}

?>
