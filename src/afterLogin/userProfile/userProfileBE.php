<?php
function EchoMessage($m, $redirect)
    {
        echo '<script type="text/javascript">
             alert("'. $m .'");
             window.location.href = "'.$redirect.'";
             </script>';
            
    }
?>
<html>
 <head> 
  <title> OTTIENI SERVIZIO </title>
 </head>
 
 <body>
  <?php
    require "../sessions/userSession.php";
    $idUsr = $_SESSION['idUserPK'];
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    $dateB = $_POST['dateBirthday'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $msg = "";
    $connection = new mysqli ("127.0.0.1","root","","gtt");

    // Check if all the fields are completed
    if(strlen($rpassword) > 0 && strlen($password) > 0){    
        if($password == $rpassword){
            $password = md5($password);
            $query="UPDATE users SET pswd = '$password' WHERE idUserPK = $idUsr";  
            // Query execution
            $connection->query($query);
            $msg= $msg . '- Password updates correctly.\n';
        } else {
            $msg= $msg . '- Password not correct, please enter again a new a password.\n';
        }
    } 

    if(strlen($username) > 0){
        $query="SELECT * FROM users WHERE username= '$username'";  
        // Query execution
        $result = $connection->query($query);
        if($result->num_rows==0) {
            $query="UPDATE users SET username = '$username' WHERE idUserPK = $idUsr";  
            // Query execution
            $connection->query($query);
            $msg= $msg . '- Username updates correctly.\n';
	    } else {
            $msg= $msg . '- Username already exists, please enter a new a new username.\n';
        }
    }

    if(strlen($firstname) > 0){
        $query="UPDATE users SET firstName = '$firstname' WHERE idUserPK = $idUsr";  
        // Query execution
        $connection->query($query); 
        $msg= $msg . '- Firstname updates correctly.\n';
    }

    if(strlen($lastname) > 0){
        $query="UPDATE users SET lastName = '$lastname' WHERE idUserPK = $idUsr";  
        // Query execution
        $connection->query($query);
        $msg= $msg . '- Lastname updates correctly.\n';
    }

    if(strlen($email) > 0){
        $query="UPDATE users SET email = '$email' WHERE idUserPK = $idUsr";  
        // Query execution
        $connection->query($query);
        $msg= $msg . '- Email updates correctly.\n';
    }

    if(strlen($dateB) > 0){
        $query="UPDATE users SET dateOfBirthDay = '$dateB' WHERE idUserPK = $idUsr";  
        // Query execution
        $connection->query($query);
        $msg= $msg . '- Date of birthday updates correctly.\n';
    }

    // Close conn
    $connection->close(); 
    $newpage = '/gtt/src/afterLogin/userProfile/userProfile.php';
    if(strlen($msg) == 0) {
        $msg = $msg . "Nessun dato modificato.";
    }
    EchoMessage($msg, $newpage);
  ?>
 </body>
</html>