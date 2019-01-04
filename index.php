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
<pre>
<?php
$numbers = array(7, 9, 8, 9, 8, 8, 6);
printArray($numbers);
echo "<br>Largest number: ".largest($numbers);
echo "<br>Average number: ".average($numbers);
echo "<br>No duplicates: ".removeDups($numbers);
echo "<br>Distibution: ".distribution($numbers);

?>
</pre>

</body>
</html>