<?php
$servername = "backendapp-mjhj-01";
$username = "Student";
$password = "Pa55w.rd";
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