<?php
$servername = "localhost";
$database = "bares";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM bar");

mysqli_data_seek ($result, 0);

$extraido= mysqli_fetch_array($result);

echo "- Id: ".$extraido['bar_id']."<br/>";

echo "- Nombre: ".$extraido['bar_nombre']."<br/>";
mysqli_free_result($result);

echo "Connected successfully";
mysqli_close($conn);
?>