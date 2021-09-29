<?php

/** Connects the MySQL database 'hanna-collection', sets the fetch mode to FETCH_ASSOC
 * @return PDO
 */
function getDatabase() : PDO {
    $db = new PDO('mysql:host=db; dbname=hanna-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/** Retrieves the database records for fields common-name, cultivar-name, family, likes, dislikes, image.
 * @param $db
 * @return array
 */
function retrieveVeg($db) : array {
    $query = $db->prepare("SELECT `common-name`, `cultivar-name`, `family`, `likes`, `dislikes`, `image` FROM `vegetables`");
    $query->execute();
    return $query->fetchAll();
}

/** Loops through the database and prints each record on a flipcard. If a record is empty, it prints an error message.
 * @param array $results
 * @return string
 */
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
