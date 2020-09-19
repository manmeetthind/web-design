<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "My_test_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO library (title, author, year)
VALUES ('My new book', 'So Me', '2020')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>