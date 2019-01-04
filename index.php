<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
<h1>Pair Program 1</h1>
<?php
$numbers = array(7, 9, 8, 9, 8, 8, 6);

function printArray($arrayItems){
    $arrayItems = implode($arrayItems, ', ');
    echo "$arrayItems";
}

printArray($numbers);

?>

</body>
</html>