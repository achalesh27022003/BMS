<?php
// Database connection settings
$servername = "127.0.0.1"; // Change if your database server is on a different host
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "mediamania";
$port = 3307;

// Capture the form data
$name = $_POST['name'];
$genre = $_POST['genre'];
$comment = $_POST['comment'];
// $date_entered = date('Y-m-d H:i:s'); // Capture the current date and time

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $genre = $_POST['genre'];
  $comment = $_POST['comment'];
}

// SQL query to insert data into the database
$sql = "INSERT INTO shareyourpicks (`Name`, `Genre`, `Comment`) VALUES ($name, $genre, $comment)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
// Prepare and bind
//$stmt = $conn->prepare("INSERT INTO shareyourpicks (`Name`, `Genre`, `Comment`) VALUES ($name, $genre, $comment)");
//$stmt->bind_param("sss", $name, $genre, $comment);

// // Execute the statement
// if ($stmt->execute()) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $stmt->error;
// }

// Close the statement and connection
// $stmt->close();

