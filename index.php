<?php
include "functions.php";
?>

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
printArray($numbers);
echo "<br>".largest($numbers);
echo "<br>".average($numbers);

?>

</body>
</html>