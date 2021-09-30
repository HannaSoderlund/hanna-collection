<?php

require 'functions.php';

// form data is sent here once submitted
// concatenate the form inputs to create an array that can be passed to be cleansed

$formInputArray = [
    $_POST['common-name'],
    $_POST['cultivar-name'],
    $_POST['family'],
    $_POST['likes'],
    $_POST['dislikes'],
    $_POST['image']
    ];

// run the validate function on the form input data
validateSanitiseFormData($formInputArray);

// the cleansed form data is now a variable $cleansedFormArray that can be used to add the new data to db
$cleansedArray = validateSanitiseFormData($formInputArray);
var_dump($cleansedArray);

// validation.php page to echo "record has been added" once successful