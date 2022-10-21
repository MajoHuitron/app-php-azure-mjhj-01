<?php
  include ('connect.php');
  
  $sql = "SELECT * FROM country"; 
  $query = $conn -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

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