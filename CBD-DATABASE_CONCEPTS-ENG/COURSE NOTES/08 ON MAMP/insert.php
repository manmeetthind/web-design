<html>
<body>

<?php
$db = new mysqli('localhost', 'root', 'root', 'My_test_DB');

if ($db->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
 
 

$sql="INSERT INTO library (title, author, year) VALUES ('$_POST[title]','$_POST[author]','$_POST[year]')";

 

if (!mysqli_query($db, $sql))

  {

  die('DATA Error: ' . mysqli_error());

  }

echo "1 record added";

 

$mysqli->close();

?>

</body>

</html>