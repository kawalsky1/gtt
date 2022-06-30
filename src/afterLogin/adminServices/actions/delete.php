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
  <title> CANCELLA SERVIZIO </title>
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
            $query="DELETE FROM services WHERE  idServicePK = $idInt";
            
            // Query execution, if user doesn't exists, print message else set session and redirect to services home
            $connection->query($query);
            $connection->close(); 

            // Redirect
            $msg="Servizio eliminato correttamente";
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
   $connection->close();
  ?>
 </body>
</html>
