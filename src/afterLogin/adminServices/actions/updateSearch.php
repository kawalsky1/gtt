<?php
require "../../sessions/adminSession.php";
function EchoMessage($t)
    {
        echo '<script type="text/javascript">
                document.getElementById("tabService").innerHTML = "";
                document.getElementById("tabService").innerHTML =' . $t . ';
             </script>';
    } 
?>
<html>
 <head> 
  <title> OTTIENI SERVIZIO </title>
 </head>
 
 <body>
  <?php

    $categories= $_POST['categoriesF'];
    $types= $_POST['types'];       
    if($_SESSION['idUserTypeFK']==1){

    // Connection string
    $connection = new mysqli("127.0.0.1","root","","gtt");
    $result = $connection->query("SELECT * FROM services WHERE type = '$types' AND category = '$categories'");
    // Creating title of the table
    $table = '<table style="border-collapse: collapse;  width: 100%;">
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">ID</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">NOME</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">TIPO</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">CATEGORIA</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">DESCRIZIONE</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">NUMERO DI PRODOTTI RILASCIATI</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">VALUTA</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">PREZZO</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">TEMPO</th>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">DURATA</th>                    
    </tr>';
    // Merge the result in another array to be iterable subsequently
    while($row = $result->fetch_array())
    {
    $rows[] = $row;
    }
    // Loop on data creating HTML table
    foreach($rows as $row)
    {
    $table = $table . '
    <tr>
    <td id="id_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['idServicePK'] . '</td>
    <td id="name_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['name'] . '</td>
    <td id="type_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['type'] . '</td>
    <td id="category_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['category'] . '</td>
    <td id="description_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['description'] . '</td>
    <td id="n_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['n'] . '</td>
    <td id="valuta_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&euro;</td> 
    <td id="price_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['price'] . '</td>
    <td id="timing_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['timing'] . '</td>
    <td id="duration_' . $row['idServicePK'] . '" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['duration'] . '</td>
    </tr>'; 
    }

    // Close the table tag
    $table = $table . "</table>";

    // Free result set
    $result->close();

    // Close connection
    $connection->close();

    return $table;
    
    } else {
        
      // Connection string
      $connection = new mysqli("127.0.0.1","root","","gtt");
      $result = $connection->query("SELECT * FROM services WHERE type = '$types' AND category = '$categories'");

      // Get data
      if($result->num_rows==0) {
        return "Nessun risultato trovato.";
      } else {
        // Creating title of the table
        $table = '<table style="border-collapse: collapse;  width: 100%;">
                    <tr>
                      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">NOME</th>
                      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">TIPO</th>
                      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">CATEGORIA</th>
                      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">DESCRIZIONE</th>
                      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">PREZZO</th>
                      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">DURATA</th>                    
                    </tr>';
        // Merge the result in another array to be iterable subsequently
        while($row = $result->fetch_array())
        {
          $rows[] = $row;
        }
        // Loop on data creating HTML table
        foreach($rows as $row)
        {
          $table = $table . '
            <tr>
              <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['name'] . '</td>
              <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['type'] . '</td>
              <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['category'] . '</td>
              <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['description'] . '</td>
              <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&euro;' . $row['price'] . '</td>
              <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['timing'] . ' ' . $row['duration'] . '</td>
            </tr>'; 
        }
        
        // Close the table tag
        $table = $table . "</table>";

        // Free result set
        $result->close();

        // Close connection
        $connection->close();

        return $table;
     }
    }
  ?>
 </body>
</html>