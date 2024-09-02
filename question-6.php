<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT Mobile FROM tbl_contacts GROUP BY Mobile HAVING COUNT(*) > 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Mobile: " . $row["Mobile"] . "\n";
    }
} else {
    echo "No duplicate phone numbers found.";
}

$conn->close();
?>
