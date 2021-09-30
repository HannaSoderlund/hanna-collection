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

    public function testMalformedShowVeg() {
        $testInput = "string";
        $this->expectException(TypeError::class);
        showVeg($testInput);
    }

    public function testSuccessValidateSanitiseFormData() {
        $testInput["common-name"] = ">";
        $expected = ["common-name" => "&gt;"];
        $case = validateSanitiseFormData($testInput);
        $this->assertEquals($expected, $case);
    }

    // failure test: test what happens if enters empty string (but this can't happen as it is a req field?)
    // test what
    public function testFailureValidateSanitiseFormData() {
        $testInput = [];
        $expected = ['Error'];
        $case = validateSanitiseFormData($testInput);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedValidateSanitiseFormData() {
        $testInput = "string";
        $this->expectException(TypeError::class);
        validateSanitiseFormData($testInput);
    }
}
