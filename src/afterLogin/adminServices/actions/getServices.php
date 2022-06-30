<?php
function EchoMessage($msg, $redirect)
    {
        echo '<script type="text/javascript">
             alert("' . $msg . '")
             </script>';
    }
?>
<html>
 <head> 
  <title> OTTIENI SERVIZIO </title>
 </head>
 
 <body>
  <?php
    $id= $_POST['id'];
    // Check if all the fields are completed
    if(strlen($id) > 0) {
        // Convert in int e double the values 
        try {
                $idInt= intval($id);
                
                // Conenction
                $connection = new mysqli ("127.0.0.1","root","","gtt");
                $query="SELECT * FROM services WHERE idServicePK = $idInt"; 
                
                // Query execution, if user doesn't exists, print message else set session and redirect to services home
                $connection->query($query);
                $result = $connection->query($query);

                if($result->num_rows==0) {     
                    $row = $result->fetch_array();
                    $json = array("name"=>$row['name'], "category"=>$row['category'], "type"=>$row['type'], "description"=>$row['description'], "n"=>$row['n'], "price"=>$row['price'], "timing"=>$row['timing'], "duration"=>$row['duration']);

                    $connection->close(); 
                    // Return
                    return json_encode($json);                   
                } else {
                    // Redirect
                    $connection->close(); 
                    $msg= "Nessun risultato trovato";
                    $newpage = '../adminServices.php';
                    EchoMessage($msg, $newpage);
                    return "";
                }
        } catch (Exception $e) {
            // Redirect
            $connection->close(); 
            $msg= 'Caught exception: ' .  $e->getMessage() . "\n";
            $newpage = '../adminServices.php';
            EchoMessage($msg, $newpage);
            return "";
        }
    } else {
        // Redirect
        $connection->close(); 
        $msg="Errore, riprovare!";
        $newpage = '../adminServices.php';
        EchoMessage($msg, $newpage);
        return "";
    }
   $connection->close();
  ?>
 </body>
</html>