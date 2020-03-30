<?php
$servername = "db";
$username = "devuser";
$password = "devpass";
$database = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

echo "Hello, World from Docker! <br>";
echo '<img src="https://www.docker.com/sites/default/files/horizontal.png">';

?>