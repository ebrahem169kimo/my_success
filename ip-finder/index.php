<?php
// Connect to MySQL database
$servername = "sql.freedb.tech:3306";
$username = "freedb_kemo169"; // Your MySQL username
$password = "CDtxhZj*4vpAq4m"; // Your MySQL password
$dbname = "freedb_ip_detector_db"; // Your MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the visitor's IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Insert IP address into the database
$sql = "INSERT INTO ip_addresses (ip) VALUES ('$ip_address')";
if ($conn->query($sql) === TRUE) {
    echo "hello user";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
