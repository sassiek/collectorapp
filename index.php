<?php
include_once 'db.php';
$db = getSupercarData();

?>

<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<?php
echo displaySupercarData($db);
?>



</body>
</html>







