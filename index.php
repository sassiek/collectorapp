<?php
include_once 'db.php';
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
<h1>Supercar Collection</h1>
<?php
echo displaySupercarData($db);
?>
</body>
</html>