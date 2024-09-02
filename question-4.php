<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "members";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sql = "SELECT m.first_name, m.last_name, a.city, a.state FROM tbl_members m JOIN tbl_addresses a ON m.member_id = a.member_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["first_name"] . "\n";
        echo "Last Name: " . $row["last_name"] . "\n";
        echo "City: " . $row["city"] . "\n";
        echo "State: " . $row["state"] . "\n";
        echo "--------------------\n";
    }
} else {
    echo "0 hasil";
}

$conn->close();

?>
