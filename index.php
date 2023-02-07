<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Baby Point Sardegna - Allattamento in tranquillità fuori città</title>
  <meta name="description" content="Sei lontano da casa, non trovi un luogo sereno per allattare al seno e/o per il cambio del pannolino? Scopri quello più vicino a te o offrine uno, qui!">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@400;500;600;700&family=Concert+One&family=Fredoka+One&family=Hammersmith+One&family=Londrina+Solid:wght@100;300;400;900&family=Nunito:wght@200;300;400;700&family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" type="image/png" href="favicon/favicon.ico" />
</head>

<body>
  <header>
    <section class="testa" id="home">
    
      <!-- NAVBAR -->
      <nav id="sidenav">
        <ul>
          <li><a href="#home">HOME</a></li>
          <li><a href="lista.html">ELENCO PUNTI</a></li>
          <li><a href="#servizi">SERVIZI</a></li>
          <li><a href="#partner">DIVENTA PARTNER</a></li>
          <li><a href="#contatti">CONTATTI</a></li>
        </ul>
        <div id="menuBtn"> </div>
      </nav>

      <!--HOME-->
      <div class="logoTabletCellulare"><img src="immagini/logo.png" alt="Baby Point Sardegna"/></div>
    <div class="inizio">
      <div class="logo"><img src="immagini/logo.png" alt="Baby Point Sardegna"/></div>
      <h1>BABY POINT<br><span>Sardegna</span></h1>
      <p>
       Il posto ideale fuori casa dove allattare in tranquillità</p>
      <a href="lista.html "><button class="pulsante">Trova il punto più vicino</button></a>
    </div>
    </section>
  </header>

  <main>
  <!--Sezione servizi-->
  <section class="servizi" id="servizi">
    <p>Uno spazio dedicato a</p>

    <div class="servizio1">
      <div class="allattare"><img src="icone/allattamento_gialla.png" alt="icona gialla su sfondo bianco, mamma che sta allattando il proprio bebè" title="allattamento al seno"></div>
      <div  class="text-servizio1">
          <h2>Allattare</h2>
          <p>
            viene messo a disposizione uno spazio dedicato e intimo, dove poter allattare
          </p>
      </div>
    </div>

    <div class="servizio2">
      <div class="nutrire"><img src="icone/pappa_gialla.png" alt="icona gialla su sfondo bianco, bimbo/a seduto/a sul seggiolone per mangiare la pappa già pronta sul cucchiaio" title="svezzamento fuori casa"></div>
      <div  class="text-servizio2">
        <h2>Nutrire</h2>
        <p>
          viene messo a disposizione uno spazio dedicato e intimo dove poter offrire il latte o la pappa
        </p>
      </div>
    </div>

    <div class="servizio3">
      <div class="cambiare"><img src="icone/pannolino_gialla.png" alt="icona gialla su sfondo bianco, neonato/a sdraiato/a sul fasciatoio durante il cambio del pannolino" title="cambiare il pannolino al neonato/a"></div>
      <div  class="text-servizio3">
        <h2>Cambiare</h2>
        <p>
          viene messo a disposizione uno spazio dedicato nel quale è possibile fare il cambio pannolino
        </p>
      </div>
    </div>
  </section>

    <!--PRESENTAZIONE-->
    <section class="presentazione" id="presentazione">
      <div class="fotoResponsive"> </div>
      <div class="text-presentazione">
        <p>
          <strong>Baby Point Sardegna</strong> è il progetto di una rete di spazi dedicati ad allattare, svezzare e
          cambiare bimbe e bimbi in spazi chiusi pubblici e privati. Nasce da un'idea condivisa tra
          l'associazione <em>Centro Nascita Serena</em> e <em>NOI DONNE 2005</em> di Sassari.<br>
          I Baby Point potranno essere realizzati all'interno di uffici pubblici, negozi, bar, ristoranti,
          farmacie, studi medici, etc, che metteranno a disposizione della donna che allatta o del papà
          che deve svezzare o cambiare il proprio bambino/a, semplicemente una sedia, e per chi abbia lo
          spazio anche un tavolino per l'eventuale cambio del pannolino (non è necessario il fasciatoio,
          se c'è, tanto di guadagnato).
          Questi luoghi pubblici o privati offriranno tale servizio, gratuitamente e senza l'utilizzo di
          sponsor o l'obbligo di acquisto di prodotti.
          <b>Per aderire basterà</b> inviare una e-mail a <b>babypointsardegna@gmail.com</b> o compilare il modulo sottostante, 
          specificando quali servizi si vogliono offrire con uno spazio dedicato ad <strong>allattare</strong>,
          <strong>svezzare</strong> e/o <strong>cambiare il pannolino</strong>.<br>
          Presso il Centro Nascita Serena a Sassari, si potrà ritirare l'adesivo e la locandina da
          esporre per indicare l'adesione al progetto.
        </p>
      </div>
      <div class="foto"> </div>
    </section>
  </main>

  <!-- MODULO -->
  <section class="partner" id="partner">
		<div class="modulo" >

			<h2>CONTATTAMI PER ADERIRE</h2>
			<p>Specifica quali servizi si vogliono offrire con uno spazio dedicato ad allattare, nutrire e/o cambiare il pannolino.</p>
		
      <?php
      // Controllo invio
      if (isset($_GET['invio'])) {
          if ($_GET['invio'] == "ok") {
      ?>
              <div class="alert alert-success text-center" role="alert">
                  Grazie per averci scritto. Risponderemo entro 24 ore
              </div>
          <?php
          } else {
          ?>
              <div class="alert alert-danger text-center" role="alert">
                  Si è verificato un errore, riprova
              </div>
      <?php
          }
      }
      ?>

      <form action="functions/send.php" method="post">
			  <div>		
				  <input type="text" name="nome" id="nome" placeholder="Nome" class="nome" required>
			  </div>

			  <div>		
				  <input type="text" name="attività" id="attività" placeholder="Nome Attività">
			  </div>
		  
			  <div>
				  <input type="email" name="email" id="email" placeholder="email@example.com" required>
			  </div>

			  <div>			
				  <textarea name="messaggio" placeholder="Messaggio.." required></textarea>
			  </div>
      
        <div>
          <input style="width:auto" type="checkbox" required>
          <label><small>Accetto il trattamento dei dati secondo la <a href="privacy-policy.html" target="_blank">Privacy Policy</a></small></label> 
        </div>
			  <input type="submit" name="submit" id="submit" class="bottone" value="Invia">
		  </form>

		</div>
	</section>
  <footer id="contatti">
    <div class="iconeSocial">
      <div class="contenitore-fb"><a href="https://www.facebook.com/babypointsardegna" target="_blank"><img src="icone/iconaFB.svg" title="Condividi/Segui su FB"></a></div>
      <div class="contenitore-wa"><a href="https://api.whatsapp.com/send?phone=%2B393489024317&fbclid=IwAR07CQPKrMAV--SmJhxShYjib-v6oONp-oJwoH_vle9Lh-7ylGgXiByfjqg" target="_blank"><img src="icone/iconaWA.svg" title="Contattami per Info"></a></div>
    </div>
    <div class="ft-element">
      <div class="ft-logo">
        <a href="#home"><img src="immagini/logoBP.png" alt="Baby Point Sardegna" title="BabyPoint Sardegna"></a>
      </div>
      <div class="ft-sx">
        <small><a href="#servizi">Servizi offerti</a></small><br>
        <small><a href="#presentazione">Come aderire al progetto</a></small><br>
        <small><a href="lista.html">Elenco punti affiliati</a></small>
      </div>
      <div class="ft-middle">
        <small>Come entrare in contatto con noi :</small><br>
        <small><a href="tel:+393489024317"> Telefono - 348 9024317</a></small><br>
        <small><a href="mailto:babypointsardegna@gmail.com">Email - babypointsardegna@gmail.com</a></small><br>
        <small><a href="#partner">Compila il form per essere ricontattato</a></small>
      </div>
      <div class="ft-dx">
        <small><a href="privacy-policy.html">Privacy Policy</a></small><br>
        <a href="https://wwww.italyteamdesign.com" target="_blank"><small>Sito offerto dal gruppo - Italy Team Design</small></a><br>
        <small>BabyPoint Sardegna © 2022 All rights reserved</small>

      </div>
    </div>
    <div class="contenitoreiconeft">   
      <div class="iconeft"><img title="Centro Nascite Serena" src="icone-ft/CentroNasciteSerena.jpg"/></div>
      <div class="iconeft"><img title="Comune di Sassari" src="icone-ft/comune.png"/></div>
      <div class="iconeft"><img title="NOI DONNE" src="icone-ft/noiDONNE.jpg"/></div>
      <div class="iconeft"><a href="https://wwww.italyteamdesign.com" target="_blank"><img alt="www.italyteamdesign.com" title="Italy Team Design" src="icone-ft/ItalyTeamDesign.png"/></a></div>
    </div>
  </footer>
  

  <script>
    let menuBtn = document.getElementById("menuBtn");
    let sidenav = document.getElementById("sidenav");

    sidenav.style.right = "-250px";
    menuBtn.onclick = function () {
      if (sidenav.style.right == "-250px") {
        sidenav.style.right = "0";
      } else {
        sidenav.style.right = "-250px";
      }
    };
  </script>
</body>
</html>