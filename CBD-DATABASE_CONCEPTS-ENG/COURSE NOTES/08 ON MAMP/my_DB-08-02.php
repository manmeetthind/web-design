<!DOCTYPE html>
<html>
<head>
<title>Writing to database</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<style>
form {
	width: 300px;
	padding: 20px;
	margin: auto;
	background-color: lightyellow;
}

label {
	display: block;
	font-weight: bold;
	margin-top: 30px;
}

input[type=text]{
	width: 250px;
}

button {
	display: block;
	margin-top: 30px;
}

h2, div, section {
	width: 300px;
	padding-top: 20px;
	margin: auto;
}

section {
	position: relative;
	top: 20px;
	padding: 10px;
	width: 400px;
	border: solid 1px black
}

table td {
	padding-right: 20px;
}

</style>
</head>
<body>
<h2>Insert a new book<br />in the database</h2>

<form action="#" method="post">
<label for="title">Title:</label>
<input type="text" name="title">

<label for="author">Author:</label>
<input type="text" name="author">

<label for="year">Year:</label>
<input type="text" name="year">

<button>Create new entry</button>
</form>

<div>
<?php
$db = new mysqli('localhost', 'root', 'root', 'My_test_DB');

if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
}

$sql = "INSERT INTO library (title, author, year) 
VALUES ('$_POST[title]','$_POST[author]','$_POST[year]')";

if (!mysqli_query($db, $sql)){
	die('Error: ' . $db_error());
}

echo "<i>1 record added</i>";
 

?>
</div>

<section>
<h3>Book list</h3><br />
<table>
	
<?php$output = "SELECT * FROM library";				$result = $db->query($output);				if ($result->num_rows > 0) {					while($row = $result->fetch_assoc()) {	
		echo "<tr><td><b>" . $row["title"]  . "</b></td><td>" . $row["author"]  . "</td><td>" . $row["year"] . "</td></tr>";	}} else {	echo "0 results";				}$db->close();					 	?>
</table>
</section>

</body>
</html>