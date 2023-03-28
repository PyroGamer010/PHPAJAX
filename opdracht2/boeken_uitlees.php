<?php
$host = "localhost";
$user = "87788";
$password = "Srecko1509";
$database = "ajax";

$conn = mysqli_connect($host, $user, $password, $database);

$query = "SELECT * FROM boeken";
$result = mysqli_query($conn, $query);

$boeken = array();
while ($row = mysqli_fetch_assoc($result)) {
    $boeken[] = $row;
}

$json_data = json_encode($boeken);

header('Content-Type: application/json');

echo $json_data;
?>
