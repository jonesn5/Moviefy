<?php
//Step1
 $db = mysqli_connect('localhost','root','','test2')
 or die('Error connecting to MySQL server.');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>

<h1>My Website</h1>
<p>A website created by me.</p>

<?php
//Step2

$query1 = "INSERT INTO testing_tbl (number, name) VALUES (9, 'Nuck')";
mysqli_query($db , $query1) or die('Error querying database.');


?>

<?php
//Step2

$query = "SELECT * FROM testing_tbl";
mysqli_query($db , $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
  echo $row["number"] . " " . $row["name"];
}

mysqli_close($db);

?>
</body>
</html>