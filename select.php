<?php
  include ('connect.php');
  
  
  $sql = "SELECT Name,Continent,Region,Population FROM country";
  // $sql = "SELECT Continent FROM world.country WHERE Name = '" . $_SESSION['pais'] . "'"; 
  $query = $conn -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

   //var_dump($results);
   echo $results[0]->Continent;

  if($query -> rowCount() > 0)   { 
    echo "<table border='1px'>";
    echo "<tr>
      <td>Name</td>
      <td>Continent</td>
      <td>Region</td>
      <td>Population</td>
    </tr>";
    foreach($results as $result) { 
      echo "<tr>
        <td>" . $result->Name . "</td>
        <td>" . $result->Continent . "</td>
        <td>" . $result->Region . "</td>
        <td>" . $result->Population . "</td>
      </tr>";
    }
    echo "</table>";
  }
?>