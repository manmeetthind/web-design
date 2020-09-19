<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<style>
th {text-align: left;}
th,td {padding-right: 20px;}
tr:hover {background-color: lightyellow; cursor: pointer;}
</style>
</head>
<body>

<table>
<tr>
<th>Titre</th>
<th>Auteur</th>
<th>Année</th>
</tr>
<?php
$username = root;
$password = root;
$db = new PDO("mysql:host=localhost;dbname=My_test_DB", $username, $password);
$table = 'library';
$stmt = $db->query('SELECT * from '.$table);
$db = NULL;
while($rows = $stmt->fetch()){
	echo "<tr><td>" . $rows['title'] . "</td><td>" . $rows['author'] . "</td><td>" . $rows['year'] . "</td></tr>";
};
?>
</table>
</html>