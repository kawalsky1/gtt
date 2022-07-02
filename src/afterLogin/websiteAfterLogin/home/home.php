<?php
require "../../sessions/userSession.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gruppo Torinese Trasporti - Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/gtt/src/css/w3.css" />
<link rel="stylesheet" type="text/css" href="/gtt/src/css/lato.css" />
<link rel="stylesheet" type="text/css" href="/gtt/src/css/montserrat.css" />
<link rel="stylesheet" type="text/css" href="/gtt/src/css/fontAwesome.css" />
<link rel="stylesheet" type="text/css" href="/gtt/src/css/style.css" />

<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    
    .fa-anchor,.fa-coffee {font-size:200px}

    .dropdown {
        float: left;
        overflow: hidden;
    }
  
  .dropdown .dropbtn {
    font-size: 16px;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: white;
    color: black;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-family:"Montserrat", sans-serif"
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
</style>
</head>
<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
      <a class=" w3-bar-item"><img style="width: 50px;" src="/gtt/src/img/logo.png"></a>
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large" href="javascript:void(0);" onclick="toggle()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="/gtt/src/afterLogin/websiteAfterLogin/home/home.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
      <a href="/gtt/src/afterLogin/websiteAfterLogin/timetable/timetable.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Orari</a>
      <a href="/gtt/src/afterLogin/websiteAfterLogin/tickets/tickets.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Biglietti</a>
      <a href="/gtt/src/afterLogin/websiteAfterLogin/subscriptions/subscriptions.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Abbonamenti</a>
      <?php
        if($_SESSION['idUserTypeFK']==1){
          echo '<a href="/gtt/src/afterLogin/adminServices/adminServices.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Servizi</a>';
        } else {
          echo '<a href="/gtt/src/afterLogin/userServices/userServices.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Servizi</a>';
        }
      ?>
      <div class="dropdown w3-hide-small">
          <button class="dropbtn"><a style="font-size: 18px!important;">Utente</a>
          <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
          <a href="/gtt/src/afterLogin/userProfile/userProfile.php">Modifica profilo</a>
          <a href="/gtt/src/afterLogin/logout/logout.php">Logout</a>
          </div>
      </div> 
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="/gtt/src/afterLogin/websiteAfterLogin/timetable/timetable.php" class="w3-bar-item w3-button w3-padding-large">Orari</a>
      <a href="/gtt/src/afterLogin/websiteAfterLogin/tickets/tickets.php" class="w3-bar-item w3-button w3-padding-large">Biglietti</a>
      <a href="/gtt/src/afterLogin/websiteAfterLogin/subscriptions/subscriptions.php" class="w3-bar-item w3-button w3-padding-large">Abbonamenti</a>
      <?php
        if($_SESSION['idUserTypeFK']==1){
          echo '<a href="/gtt/src/afterLogin/adminServices/adminServices.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Servizi</a>';
        } else {
          echo '<a href="/gtt/src/afterLogin/userServices/userServices.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Servizi</a>';
        }
      ?>
      <div class="dropdown w3-bar-item w3-button w3-padding-large">
          <button style="padding-left:0px; color:black;" class="dropbtn"><a style="font-size: 18px!important;">Utente</a>
          <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
          <a href="/gtt/src/afterLogin/userProfile/userProfile.php">Modifica profilo</a>
          <a href="/gtt/src/afterLogin/logout/logout.php">Logout</a>
          </div>
      </div> 
    </div>
  </div>

<!-- Header -->
<div class="w3-container w3-blues w3-center" style="position:center; padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">NIGHT BUS</h1><h1 class="w3-margin w3-jumbo">ESTATE</h1>
  <p class="w3-xlarge">Abbiamo esteso le nostre linee notturne,</p><p class="w3-xlarge">per garantire un miglior servizio ai nostri clienti.</p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">
    <a style="text-decoration:none;" href="/gtt/src/login/login.php">Accedi</a>
  </button>
</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Gruppo Torinese Trasporti</h1>
      <h5 class="w3-padding-32">Gli orari dei night bus saranno estesi per tutto il periodo estivo.</h5>

      <p class="w3-text-grey">Dopo la mezzanotte, i nostri mezzi saranno attivi fino alle 6:00 del mattino, per garantire un servizio migliore e poter permettere alla night life di potersi spostare durante tutti gli orari notturni.</p>
    </div>

    <div class="w3-third w3-center">
      <img style="width: 80%" src="/gtt/src/img/home/mappa_night_buster_estate_2022.jpg" alt="Pullman gtt in fiamme">
    </div>
  </div>
</div>

<!-- Footer -->
<footer style="width:101%; background-color: black; color:white;" class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Gruppo Torinese Trasporti - <a href="https://www.gtt.to.it/cms/" target="_blank">GTT</a></p>
 <p>Powered by Caterina Riedling & Laura Pelizza</p>
</footer>



<script>
// Used to toggle the menu on small screens when clicking on the menu button
function toggle() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
