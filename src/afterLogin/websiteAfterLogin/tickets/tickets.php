<?php
require "../../sessions/userSession.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gruppo Trollatori Torinese - Biglietti</title>
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
		<h3> Biglietto City - € 1,70 </h3>
			<p> 
				Biglietto disponibile su smart card BIP, su supporto chip on paper (alle rivendite o alle emettitrici delle stazioni della metro), tramite l'app TO Move e con il nuovo sistema di pagamento con le carte contactless dei circuiti Mastercard e Visa ai varchi della metropolitana e sui bus delle linee 18, 55, 56 58 e 68. Vale per 100 minuti dal momento della convalida compresa una corsa in Metropolitana. E' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mezzo.
				Il biglietto City caricato su smart card BIP ha validità 730 giorni dal momento dell'acquisto e di 360 giorni se acquistato con app To Move. 
			</p>
		<h3> MultiCity - € 10,00 </h3>
			<p> 
				Biglietto chip on paper, contiene 6 biglietti City 100. I 6 biglietti sono validi ciascuno per 100 minuti compresa una corsa in Metropolitana. E' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mezzo. Disponibile per l'acquisto presso le rivendite GTT e le emettitrici delle stazioni della metro o tramite l'app TO Move.
				Il MultiCity ha validità di 360 giorni dal momento dell'acquisto se acquistato con app To Move. 
			</p>
		<h3> Daily - € 3,00 </h3>
			<p> 
				Biglietto giornaliero disponibile su smart card BIP o tramite l'app TO Move. E' valido per un numero illimitato di corse fino al termine del servizio del giorno della prima validazione su tram, bus e in metropolitana. E' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mezzo. 
				Il biglietto Daily caricato su smart card BIP o acquistato con app TO Move ha validità 360 giorni dal momento dell'acquisto.
				La convenienza del titolo è legata al numero di viaggi effettuati: ad esempio se si fanno tre corse in un giorno il costo è di 1 euro a viaggio e con 4 corse il costo unitario diventa di 0,75 euro a viaggio. 
			</p>
		<h3> Daily - € 4,00 </h3>
			<p> 
				Biglietto giornaliero su supporto chip on paper. E' valido per un numero illimitato di corse fino al termine del servizio del giorno della prima validazione su tram, bus e in metropolitana. E' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mezzo. Disponibile per l'acquisto presso le rivendite GTT e le emettitrici delle stazioni della metro. 
			</p>
		<h3> MultiDaily 7 - € 17,50 </h3>
			<p> 
				Contiene 7 biglietti Daily ed è disponibile su smart card BIP e tramite l'app TO Move. E' valido per un numero illimitato di corse fino al termine del servizio del giorno della prima validazione su tram, bus e in metropolitana, per 7 giornate, anche non consecutive, a scelta del cliente. E' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mezzo. 
			</p>
		<h3> Biglietto Speciale "Tour" valido per 48 ore o 72 ore - € 7,50 / € 10,00 </h3>
			<p> 
				Biglietto chip on paper valorizzato al momento dell’acquisto. Valido per viaggiare su tram, bus e in metropolitana per 48 o 72 ore dal momento della prima validazione. E' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mezzo. Disponibile per l'acquisto presso le rivendite GTT e le emettitrici delle stazioni della metro. 
			</p>
  <div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
  <p>Gruppo Trollatori Torinese - <a href="https://www.gtt.to.it/cms/" target="_blank">GTT</a></p>
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
