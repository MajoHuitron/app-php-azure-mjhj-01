<?php
$servername = "mjhj-db-01.database.windows.net";
$username = "Student";
$password = "Pa55w.rd";

try {
  $conn = new PDO("sqlsrv:Server=$servername;database=worldcachi", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>