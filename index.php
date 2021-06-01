<?php
function getSupercarDB()
{
   $supercarDB = new PDO('host=db; dbname=supercarcollectorapp', 'root', 'password');
   $supercarDB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   return $supercarDB;
}

function getSupercars($supercarDB)
{
    $query = $supercarDB->prepare('SELECT * FROM `make`;');
    $query->execute();
    return $query->fetchAll();
}

$supercarDB = getSupercarDB();
