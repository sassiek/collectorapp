<?php
function connectToDB()
{
    $db = new PDO('mysql:host=db;dbname=supercarcollectorapp', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

function getSupercarData()
{
    $db = connectToDB();
    $query = $db->prepare("SELECT `make`, `model`, `bhp`, `top_speed_mph` FROM `supercars`");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function displaySupercarData($supercars)
{
    $display = '<div class="section">';
    foreach ($supercars as $supercar) {
        $display .= '<div class="supercarSection">'
            . '<p class="information">' . 'Make: ' . '<span>' . $supercar['make'] . '</span>' . '</p>'
            . '<p class="information">' . 'Model: ' . '<span>' . $supercar['model'] . '</span>' . '</p>'
            . '<p class="information">' . 'BHP: ' . '<span>' . $supercar['bhp'] . '</span>' . '</p>'
            . '<p class="information">' . 'Top Speed (mph): ' . '<span>' . $supercar['top_speed_mph'] . '</span>' . '</p>'
            . '</div>';
    }
    $display .= '</div>';
    return $display;
}

