<?php
  include ('connect.php');
  $code = $_GET["code"];
  session_start();
  $sql = "EXEC getPais @code='" . $code . "'";
  //$sql = "SELECT Continent FROM world.country WHERE Name = '" . $_SESSION['pais'] . "'"; 
  $query = $conn -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

  //var_dump($results);

  if($query -> rowCount() > 0)   { 
    echo "<table border='1px'>";
    echo "<tr>
      <td>Pais</td>
      <td>Continente</td>
      <td>Region</td>
      <td>code</td>
      <td>code2</td>
      <td>Capital</td>
    </tr>";
    foreach($results as $result) { 
      echo "<tr>
        <td>" . $result->Pais . "</td>
        <td>" . $result->Continente . "</td>
        <td>" . $result->Region . "</td>
        <td>" . $result->code . "</td>
        <td>" . $result->code2 . "</td>
        <td>" . $result->Capital . "</td>
      </tr>";
    }
    echo "</table>";
  }
?>