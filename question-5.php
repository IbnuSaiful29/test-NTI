<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clients";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT c.Name AS Clients FROM tbl_clients c LEFT JOIN tbl_invoices i ON c.Id = i.client_id WHERE i.client_id IS NULL";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Clients: " . $row["Clients"] . "\n";
    }
} else {
    echo "No clients without invoices.";
}

$conn->close();
?>
