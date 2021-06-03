<?php
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
<div class="formPageTitle">
    <h1>Add To The<br>Supercar Collection</h1>
</div>
<button class="homeLinkButton" type="button" onclick="document.location='index.php'">Go Back to the Collection</button>
<form class="addSuperCarForm">
    <label>Make:</label>
    <input type="text" name="make">
    <label>Model:</label>
    <input type="text" name="model">
    <label>BHP:</label>
    <input type="number" name="bhp">
    <label>Top Speed (mph):</label>
    <input type="number" name="top_speed_mph">
    <input type="submit">
</form>

</body>
</html>
