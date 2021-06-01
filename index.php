<?php
function getSupercarDB(): PDO
{
   $supercarDB = new PDO('mysql:host=db; dbname=supercarcollectorapp', 'root', 'password');
   $supercarDB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   return $supercarDB;
}


/* function getSupercars($supercarDB): array
{
    $query = $supercarDB->prepare('SELECT * FROM `supercars`');
    $query->execute();
    return $supercars = $query->fetchAll();
}

$supercarDB = getSupercarDB();

function displaySuperCar($supercars)
{
    echo '<ul>';
    foreach($supercars as $item) {
        echo '<li>' . $item['model'] . '</li>';
    }
    echo '</ul>';
}
displaySuperCar(); */


