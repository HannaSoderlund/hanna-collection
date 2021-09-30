<?php

/** Connects the MySQL database 'hanna-collection', sets the fetch mode to FETCH_ASSOC
 * @return PDO the database connection
 */
function getDatabase() : PDO {
    $db = new PDO('mysql:host=db; dbname=hanna-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/** Retrieves the database records for fields common-name, cultivar-name, family, likes, dislikes, image.
 * @param $db the database connection
 * @return array the vegetables returned from the database
 */
function retrieveVeg($db) : array {
    $query = $db->prepare("SELECT `common-name`, `cultivar-name`, `family`, `likes`, `dislikes`, `image` FROM `vegetables`");
    $query->execute();
    return $query->fetchAll();
}

/** Loops through the database and prints each record on a flipcard. If a record is empty, it prints an error message.
 * @param array $results the results from the database
 * @return string generated HTML containing vegetable info
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

// create a function that takes the form input array, runs them through filter_var and returns the cleansed array
/** Creates a new variable for the cleansed form data, loops through the form fields and cleanses them using htmlspecialchars()
 * @param array $formInputArray the form input fields as an array
 * @return array the cleansed form input fields as an associative array
 */
function validateSanitiseFormData(array $formInputArray) : array {
    $cleansedFormArray = [];

    if (empty($formInputArray)) {
        $cleansedFormArray = ['Error'];
    }

    foreach($formInputArray as $key=>$formField) {
        $cleansedFormArray[$key] = htmlspecialchars($formField);
    }
    return $cleansedFormArray;
}

?>
