<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</head>
<body>

<?php
$db = new mysqli('localhost', 'root', 'root', 'My_test_DB');


if ($db->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM library";
$result = $db->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row["title"]  . "<br>";
	}
} else {
	echo "0 results";
}

$db->close();
?>




</body>
</html>