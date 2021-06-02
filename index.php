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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
echo displaySupercarData($db);
?>
</body>
</html>