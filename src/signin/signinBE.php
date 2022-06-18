<?php
function EchoMessage($msg, $redirect){
    echo '<script type="text/javascript">
            alert("' . $msg . '")
            window.location.href = "'.$redirect.'"
         </script>';
}
?>
<html>
 <head> 
  <title> SIGNIN </title>
 </head>
 
 <body>
  <?php
   $username = $_POST['username'];
   $password = $_POST['password'];
   $rpassword = $_POST['rpassword'];
   $email = $_POST['email'];
   $nome = $_POST['firstName'];
   $cogn = $_POST['lastName'];
   $d = $_POST['dateBirthday'];
   
   // Check fields

   // Password
   if($password != $rpassword) {
        $msg="La password non è uguale, riprova ad inserire la password.";
        $newpage = '/gtt/src/signin/signin.php';
        EchoMessage($msg, $newpage);
   }

   // Required fields
   if(strlen($username)==0 || strlen($password)==0 || strlen($rpassword)==0 || strlen($email)==0 || strlen($nome)==0 || strlen($cogn)==0 || strlen($d)==0){
        $msg="Compilare tutti i campi obbligatori!!!";
        $newpage = '/gtt/src/signin/signin.php';
        EchoMessage($msg, $newpage);  
   }

   // Connection string
   $connection = new mysqli("127.0.0.1","root","","gtt");
   $query = "SELECT * FROM users WHERE username='$username' OR email = '$email'";
   $result = $connection->query($query);
   
   // Check the result, if result doesn't exist, add to db else print message
   if($result->num_rows==0) {
        // Add user, cleaning the variables
        $password = md5($password);
        $createdAt = date("Y/m/d");

        // Query creation
        $query = "insert into users(
            idUserTypeFK,
            username,
            email,
            pswd,
            firstName,
            lastName,
            dateOfBirthDay,
            createdAt
        ) values (
            0,
            '$username',
            '$email',
            '$password',
            '$nome',
            '$cogn',
            '$d',
            '$createdAt'
        )";
        $result = $connection->query($query);

        // Show message
        $msg="Registrazione copletata con successo! Effettuare il login.";
        $newpage = '/gtt/src/login/login.php';
        EchoMessage($msg, $newpage);
    } else {
        // User already exists
        $msg="L'utente esiste gia', effettuare l'accesso con un altra username/email.";
        $newpage = '/gtt/src/signin/signin.php';
        EchoMessage($msg, $newpage);
    }
    $result->free();
	$connection->close();
  ?>
 </body>
</html>
