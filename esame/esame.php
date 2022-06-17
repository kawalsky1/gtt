<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8" />
		<title>Sito GTT</title>
		<meta name="keywords" content="gtt, biglietti, pullman, gtt torino, pullman torino, abbonamenti mezzi" />
		<meta name="description" content="sito gtt torino" />
		<meta name="author" content="caterina riedling e laura pelizza" />
		
		<Link rel="stylesheet" type="text/css" href="style.css" />
	</head>
    <body>
        <?php print "Ciao"; 
        ?>

        <header> 
			<img src="immagini/logogtt.png" alt="logo gtt" title="logo gtt" id="logo">
		</header>
		<nav> 
			<ul>
				<li class="menu"> <a href="esame.html"><strong>Home</strong> </a> </li>
				<li class="menu"> <a href="Orari.html"><strong>Orari</strong> </a> </li>
				<li class="menu"> <a href="Biglietti.html"><strong>Biglietti</strong> </a> </li>
				<li class="menu"> <a href="Abbonamenti.html"><strong>Abbonamenti</strong> </a> </li>
			</ul>
		</nav>
		<h1>Compila con i tuoi dati</h1>
        <form action="surname.php" method="POST">
            <input type="text" name="nome" placeholder="nome"/>
            <button type="submit">Submit</button>
        </form>
		


		<section>
			<article>
				<img src="immagini/pullman.jpg" alt="pullman blu e giallo della gtt" title="Pullman"
				class="image">	
				<img src="immagini/taxi.jpg" alt="scritta taxi con sonfo mole antonelliana e montagne piemontesi" title="Taxi"
				class="image">
				<img src="immagini/metro.jpg" alt="ingresso con tornelli della metropolitana" title="Metropolitana"
				class="image">
				<img src="immagini/biglietto.jpg" alt="biglietto multicity" title="Biglietto"
				class="image">
				<img src="immagini/turismo.jpg" alt="pullman rosso a due piani per le visite turistiche della città" title="Pullman turistico"
				class="image">
				<img src="immagini/tram.jpg" alt="tram in funzione per la città di torino" title="Tram"
				class="image">
				<br/>
				<h3> Informazioni generali </h3>
					<dl class="info">
						<dt> GTT offre un’ampia gamma di abbonamenti, in grado di soddisfare ogni esigenza di spostamento: </dt>
						<dd> <strong>Urbana</strong>, per viaggiare in Torino città fino ai confini dei Comuni della prima cintura </dd>
						<dd> <strong>Suburbana</strong>, per raggiungere i Comuni della cintura torinese </dd>
						<dd> <strong>Extraurbana</strong>, per viaggiare nella Provincia di Torino e in Piemonte </dd>
					</dl>
				<h3> La tua opinione è importante: </h3>
					<form action="gtt@gmail.com" method="post" enctype="text/plain">
						<label for="commento" hidden>Inserisci commento</label>
						<textarea name="commento" id="commento" cols="50" rows="6">Lascia un commento...</textarea>
					</form>
			</article>
		</section>
		<aside class="aside">
			<ul id="approfondimenti">
				<li> <a href="Accessibilità.html"><strong>Accessibilità</strong> </a> </li>
				<li> <a href="Taxi.html"><strong>Taxi</strong> </a> </li>
				<li> <a href="Pagamento_multe.html"><strong>Pagamento multe</strong> </a> </li>
				<li> <a href="Servizi_per_il_turismo.html"><strong>Servizi per il turismo</strong> </a> </li>
			</ul>
			<br/>
			<img src="immagini/mappa.jpg" alt="mappa linee dei traporti gtt a torino" title="Mappa linee gtt"
			class="mappa">	
			<br/><br/>
			<img src="immagini/percorsometro.jpg" alt="mappa linea metropolitana di torino" title="Mappa linea metropolitana"
			class="mappa">		
		</aside>
		<footer> Caterina Riedling, Laura Pelizza <br/> L'ufficio si trova in Via Manin 17 a Torino. </footer> 

    </body>
</html> 