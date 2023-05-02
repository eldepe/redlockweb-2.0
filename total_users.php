<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// cek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// query untuk menghitung jumlah user
$sql = "SELECT COUNT(*) as total FROM users";
$result = $conn->query($sql);

// ambil hasil query
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  echo "Total users: " . $row["total"];
} else {
  echo "No users found";
}

// tutup koneksi
$conn->close();

?>