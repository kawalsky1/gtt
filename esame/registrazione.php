<?php
$conn=mysqli_connect("localhost", "caterina", "prova", "caterina");

if($conn === false) { 
    die("errore di connessione:" . $conn->connect_error);
}

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$password= $_POST['password'];
$verifica_password= $_POST['verifica_password'];

$query = "INSERT INTO registrazione (nome, cognome, email, password, verifica_password) VALUES ('$nome', '$cognome', '$email', '$password', '$verifica_password')";
if($conn->query($query) === true) {
    echo "registrazion effettuata con successo";
}
    else echo "registrazione non avvenuta";

/* echo "connessione avvenuta con successo:" . $conn->host_info;


    session_start();
    if(isset($_SESSION["username"])){ 
        header("Location: esame.html");
        exit;
    }
    */
?>