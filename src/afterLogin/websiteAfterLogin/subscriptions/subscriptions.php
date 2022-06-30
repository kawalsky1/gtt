<?php
require "../../sessions/userSession.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gruppo Torinese Trasporti - Abbonamenti</title>
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

    .bodyPadding {
      padding-left: 25px;
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

  <div class="bodyPadding">
    <br><br><br>
    <h3> Rete Urbana - Formula U </h3>
        <p>
          <strong> Su quali mezzi puoi viaggiare?</strong> Su tutti i bus e tram GTT della rete urbana di Torino, inclusa la Metropolitana. Nell'abbonamento Formula U sono inclusi i servizi ferroviari GTT e Trenitalia (in 2° classe), limitatamente alle tratte di percorrenza urbane (stazioni Lingotto, Porta Nuova, Porta Susa, Rebaudengo).
        <br/>
          <strong>Dove li puoi acquistare?</strong> Online, presso le Rivendite autorizzate e ai Centri di Servizi al Cliente GTT (solo gli abbonamenti disoccupati).
        <br/>
          <strong>Come devi utilizzarli?</strong> Tutti gli abbonamenti sono caricati su tessera Bip e personali e danno diritto a viaggiare senza limitazioni di corse e di orario, nei giorni feriali e festivi. Per tutte le modalità di convalida, vai alla sezione
        </p>
      <h4> Costi </h4>
        <p> 
          Annuale: € 310,00
        <br/>
          Mensile: € 38,00
        <br/>
          Settimanale: € 12,00
        </p>
      <h3> Rete Suburbana - Formula 1 </h3>
        <p> 
          <strong>Su quali mezzi puoi viaggiare?</strong> Su tutti i bus e tram GTT della rete suburbana GTT di Torino (scopri le linee suburbane e le tratte suburbane delle linee urbane) e nella zona A dell'area integrata Formula.
        <br/>
          <strong>Dove li puoi acquistare?</strong> Online o presso le Rivendite autorizzate.
        <br/>
          <strong>Come devi utilizzarli?</strong> Tutti gli abbonamenti sono caricati su tessera Bip e personali e danno diritto a viaggiare senza limitazioni di corse e di orario, nei giorni feriali e festivi.
        </p>
      <h4> Costi </h4>
        <p> 
          Annuale: € 351,50
        <br/>
          Mensile: € 37,00
        <br/>
          Settimanale: € 10,30
        </p>
      <h3> Urbana+Suburbana - Formula 3 </h3>
        <p> 
          <strong>Su quali mezzi puoi viaggiare?</strong> Su tutti i bus e tram GTT della rete urbana e suburbana di Torino, inclusa la Metropolitana e, nell'ambito della zona U+A dell'area integrata Formula, sui servizi ferroviari GTT e delle linee delle Aziende di Trasporto aderenti al sistema integrato Formula, compresi i treni Trenitalia su cui hai diritto a viaggiare in 2ª classe.
        <br/>
          <strong>Dove li puoi acquistare?</strong> Online (escluso il settimanale) o presso le Rivendite autorizzate.
        <br/>
          <strong>Come devi utilizzarli?</strong> Tutti gli abbonamenti sono caricati su tessera Bip e personali e danno diritto a viaggiare senza limitazioni di corse e di orario, nei giorni feriali e festivi.
        </p>
      <h4> Costi </h4>
        <p> 
          Annuale: € 560,50
        <br/>
          Mensile: € 59,00
        <br/>
          Settimanale: € 16,40
        </p>
  <div>
  <br><br><br><br><br><br><br><br>
  <!-- Footer -->
  <footer style="position:relative; margin-left: -25px; margin-right: -25px; background-color: black; color:white;" class="w3-container w3-padding-64 w3-center w3-opacity">  
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
