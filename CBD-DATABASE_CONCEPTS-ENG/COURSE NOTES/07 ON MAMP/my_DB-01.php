<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</head>
<body>

<?php

// Server info
// Connection with the object oriented way

$db = new mysqli('localhost', 'root', 'root', 'My_test_DB');

if($db->connect_errno > 0){
    die('Error : ('. $db->connect_errno .') '. $db->connect_error);
}

echo 'Connected successfully.';

$mysqli->close();
?>




</body>
</html>