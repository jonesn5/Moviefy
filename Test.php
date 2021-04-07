<?php
//Step1
 $db = mysqli_connect('localhost','root','root','test2')
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
echo "hello-1";

$query = "SELECT * FROM testing_tbl";
mysqli_query($db , $query) or die('Error querying database.');

echo "hello1";

$result = mysqli_query($db, $query);

echo "hello";

while ($row = mysqli_fetch_array($result)) {
  echo $row["number"] . "t " . $row["name"];
}

mysqli_close($db);

?>
</body>
</html>