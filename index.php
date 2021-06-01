<?php
include_once 'includes/db.php';
?>





/* function getSupercars($supercarDB): array
{*/
    $query = $supercarDB->prepare('SELECT * FROM `supercars`');
    $query->execute();
    return $supercars = $query->fetchAll();






