<?php
$servername = "HEESOOK\SQLEXPRESS";
$username = "adminworld01";
$password = "Admin12345";
$database = "worldcachi";

try {
  $conn = new PDO("sqlsrv:Server=$servername;database=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>