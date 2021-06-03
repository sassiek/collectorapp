<?php
include_once 'functions.php';
$db = getSupercarData();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<button class="formLinkButton" name="add_to_collection" type="button" onclick="document.location='form.php'">Add To The Collection</button>
<div class="title">
    <img src="lamborghini.jpg" alt="supercar background" width="600">
    <h1>Supercar<br>Collection</h1>
</div>
<?php
echo displaySupercarData($db);
?>
</body>
</html>