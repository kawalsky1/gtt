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
  <title> LOGIN </title>
 </head>
 
 <body>
  <?php
   // Check input data
   if(strlen($_POST['username'])!=0 && strlen($_POST['password'])!=0) {
        // Get data
        $username= $_POST['username'];
        $password= md5($_POST['password']);

        // Connection string
        $connection = new mysqli("127.0.0.1","root","","gtt");
	    $query = "SELECT * FROM users WHERE username='$username'";
	    $result = $connection->query($query);

	    // Query execution, if user doeasn't exists, print message else set session and redirect to services home
        if($result->num_rows==0) {
	        $msg="Utente inesistente!";
	        $newpage = '/gtt/src/login/login.php';
            EchoMessage($msg, $newpage);
	    } else {
            $user_row= $result->fetch_array();
            
            // Check password
            if($password != $user_row['pswd']){
                $msg="Password errata, riprovare.";
                $newpage = '/gtt/src/login/login.php';
                EchoMessage($msg, $newpage);            
            } 
            session_start();
            session_unset();
            session_destroy();
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['idUserTypeFK']=$user_row['idUserTypeFK'];
            $_SESSION['idUserPK']=$user_row['idUserPK'];
            $_SESSION['start_time']=time();
            
            // If the user is admin we send the user to the admin board services else to the user services
            echo "Loading please, wait...";
            if($user_row['idUserTypeFK'] == 0) {
                $newpage = '/gtt/src/afterLogin/userServices/userServices.php';
                header('Refresh: 1; url=' . $newpage);    
            } else {
                $newpage = '/gtt/src/afterLogin/adminServices/adminServices.php';
                header('Refresh: 1; url=' . $newpage); 
            }
        }
   } else {
        $msg="Inserire username e/o password per accedere.";
        $newpage = '/gtt/src/login/login.php';
        EchoMessage($msg, $newpage);
   }

   $result->free();
   $connection->close();
  ?>
 </body>
</html>
