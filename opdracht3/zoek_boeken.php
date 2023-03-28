<?php
// Maak een databaseverbinding met de juiste credentials
$host = "localhost";
$user = "87788";
$password = "Srecko1509";
$database = "ajax";

$conn = mysqli_connect($host, $user, $password, $database);

// Ontvang de titelparameter via $_POST
$title = $_POST['title'];

// Schrijf een SQL-query om alle boeken te selecteren die de titel bevatten
$query = "SELECT * FROM boeken WHERE title LIKE '%" . $title . "%'";
$result = mysqli_query($conn, $query);

// Zet de gegevens van alle boeken in een array
$boeken = array();
while ($row = mysqli_fetch_assoc($result)) {
  $boeken[] = $row;
}

// Gebruik de header() functie om de content-type header te zetten naar 'application/json'
header('Content-Type: application/json');

// Converteer de array naar een JSON-array met behulp van de json_encode() functie
$json_data = json_encode($boeken);

// Echo de JSON-array naar de output
echo $json_data;
?>
