<?php
  include ('connect.php');  
  session_start();
  
  $sql = "SELECT Continent FROM world.country WHERE Name = '" . $_SESSION['pais'] . "'"; 
  $query = $conn -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

//  var_dump($results); // 
  echo $results[0] -> Continent;
?>