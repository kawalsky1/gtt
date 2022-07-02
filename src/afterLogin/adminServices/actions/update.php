<?php
function EchoMessage($msg, $redirect)
    {
        echo '<script type="text/javascript">
             alert("' . $msg . '")
             window.location.href = "'.$redirect.'"
             </script>';
            
    }
?>
<html>
 <head> 
  <title> OTTIENI SERVIZIO </title>
 </head>
 
 <body>
  <?php
    $id= $_POST['idU'];
    $name = $_POST['nomeU'];
    $category = $_POST['categoriaU'];
    $type = $_POST['tipoU'];
    $description = $_POST['descrizioneU'];
    $n = $_POST['nU'];
    $price = $_POST['prezzoU'];
    $timing = $_POST['timingU'];
    $duration = $_POST['durataU'];
    // Check if all the fields are completed
    if(
        strlen($id) > 0 &&
        strlen($name) > 0 &&
        strlen($category) > 0 &&
        strlen($type) > 0 &&
        strlen($description) > 0 &&
        strlen($price) > 0 && 
        strlen($timing) > 0 &&
        strlen($duration) > 0 && 
        strlen($n) > 0
    ) {
        // Convert in int e double the values 
        try {
            $nInt= intval($n);
            $priceDouble = floatval($price);
            $tInt= intval($timing);
            $idInt= intval($id);

            // Conenction
            $connection = new mysqli ("127.0.0.1","root","","gtt");
            $query="UPDATE services SET name = '$name', category = '$category', type = '$type', description = '$description', n = $nInt, price = $priceDouble, timing =  $tInt, duration = '$duration' WHERE idServicePK = $idInt"; 
            
            // Query execution
            $connection->query($query);

            // Redirect
            $connection->close(); 
            $msg="Servizio modificato!";
            $newpage = '../adminServices.php';
            EchoMessage($msg, $newpage);                
        } catch (Exception $e) {
            // Redirect
            $msg= 'Caught exception: ' .  $e->getMessage() . "\n";
            $newpage = '../adminServices.php';
            EchoMessage($msg, $newpage);
        }
    } else {
        // Redirect
        $msg="Errore, riprovare!";
        $newpage = '../adminServices.php';
        EchoMessage($msg, $newpage);
    }
  ?>
 </body>
</html>