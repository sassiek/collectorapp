<?php
function connectToDB(): PDO
{
    $db = new PDO('mysql:host=db;dbname=supercarcollectorapp', 'root', 'password');
    /*$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
    return $db;
}

$make = $_POST['make'];
$model = $_POST['model'];
$bhp = $_POST['bhp'];
$top_speed_mph = $_POST['top_speed_mph'];


$db = connectToDB();
$query = $db->prepare("INSERT INTO `supercars` (`id`, `make`, `model`, `bhp`, `top_speed_mph`) VALUES ('0', '$make', '$model', '$bhp', '$top_speed_mph')");
$query->execute();
