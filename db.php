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

function displaySupercarData(array $supercars):string
{
    $display = '<div class="section">';
    foreach ($supercars as $supercar) {
        $display .= '<div class="supercarSection">'
            . '<p>' . 'Make: ' . '<span>' . $supercar['make'] . '</span>' . '</p>'
            . '<p>' . 'Model: ' . '<span>' . $supercar['model'] . '</span>' . '</p>'
            . '<p>' . 'BHP: ' . '<span>' . $supercar['bhp'] . '</span>' . '</p>'
            . '<p>' . 'Top Speed (mph): ' . '<span>' . $supercar['top_speed_mph'] . '</span>' . '</p>'
            . '</div>';
    }
    $display .= '</div>';
    return $display;
}

