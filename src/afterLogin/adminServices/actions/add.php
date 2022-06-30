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
  <title> AGGIUNGI SERVIZIO </title>
 </head>
 
 <body>
  <?php

    $nome= $_POST['nome'];
    $categoria= $_POST['categoria'];
    $tipo= $_POST['tipo'];
    $descrizione= $_POST['descrizione'];
    $prezzo= $_POST['prezzo'];
    $timing= $_POST['timing'];
    $durata= $_POST['durata'];
    $n= intval($_POST['n']);

    // Check if all the fields are completed
    if(
        strlen($nome) > 0 &&
        strlen($categoria) > 0 &&
        strlen($tipo) > 0 &&
        strlen($descrizione) > 0 &&
        strlen($prezzo) > 0 && 
        strlen($timing) > 0 &&
        strlen($durata) > 0 && 
        strlen($n) > 0
    ) {
        // Convert in int e double the values 
        try {
            $nInt= intval($n);
            $priceDouble = floatval($prezzo);
            $tInt= intval($timing);

            // Conenction
            $connection = new mysqli ("127.0.0.1","root","","gtt");
            $query="INSERT INTO services (name, category, type, description, n, price, timing, duration) VALUES ('$nome', '$categoria', '$tipo', '$descrizione', $nInt, $priceDouble, $tInt, '$durata')";
            
            // Query execution, if user doesn't exists, print message else set session and redirect to services home
            $connection->query($query);
            $connection->close(); 

            // Redirect
            $msg="Servizio aggiunto correttamente";
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
