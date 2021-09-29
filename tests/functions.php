<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase {
    public function testSuccessShowVeg() {
        $testInput = [[
        "image" => "mango.jpeg",
        "common-name" => "mango",
        "cultivar-name" => "Alphonso",
        "family" => "mangoson",
        "likes" => "nothing",
        "dislikes" => "everything",
        ]];

        $expected ='<div class="veg-card">';
        $expected .='<div class="veg-card-inner">';
        $expected .='<div class="veg-card-front">';
        $expected .= '<img src="images/' . "mango.jpeg" . '" style="width:300px; height:300px;' . '"/>';
        $expected .= '</div>';
        $expected .= '<div class="veg-card-back">';
        $expected .= '<h3>' . "mango" . ' - ' . "Alphonso" . '</h3>';
        $expected .= '<p>' . 'Family: ' . "mangoson" . '</p>';
        $expected .= '<p>' . 'Likes: ' . '<br>' . "nothing" . '</p>';
        $expected .= '<p>' . 'Dislikes: ' . '<br>' . "everything" . '</p>';
        $expected .= '</div>';
        $expected .= '</div>';
        $expected .= '</div>';

        $case = showVeg($testInput);
        $this->assertEquals($expected, $case);
}

    public function testFailureShowVeg() {
        $testInput = [];
        $expected = 'Error';
        $case = showVeg($testInput);
        $this->assertEquals($expected, $case);
}

}

// edit function so that it displays an error if no input
// create failure test testing expected as blank