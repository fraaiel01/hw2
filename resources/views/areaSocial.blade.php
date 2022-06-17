<DOCTYPE html>
<html>
   <head>
     <meta name="viewport"content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{ url('css/areasocial.css') }}"/>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
     <script  src="{{ url('js/miPiace.js') }}" defer="true"></script>
     <script> 
        const BASE_URL="{{ url('/') }}/"; //tutto cio che viene prima del nome della root (mettiamo qui perche chiaramente blade non si puo utilizzare  in js)
    </script>
   </head>


<header>
  <nav id="navigazione">
             <div id="titolo">SOCIAIEL</div>
              <div class="elementi">
                  <a id="home" href="{{ url('home') }}"data-id_user='{{ $id }}'>Home</a>
                  <a id="social" href="{{ url('areapersonale') }}">Area Post</a>  
                  <a id="logout" href="{{ url('logout') }}">Logout</a>
              </div>
  </nav>
</header>


<h2>Conosciamo i 5 social piu utilizzati al momento!</h2>

<article id="generale">
 <section class="sezione">
  <div class="numerazione"> 1 </div>
   <div class="paragrafo">
     <div class="Titolo"> YOUTUBE </div>
     <div class="Utenti"> 2,80 miliardi di utenti attivi mensili </div>
     <div class="Descrizione"> Società informatica fondata nel 2005 e dalla fine del 2006 di proprietà della Google inc. Il suo sito Internet è il principale 
                               strumento di condivisione di filmati della rete: ogni utente può mettere on-line, senza controllo preventivo da parte del sito, 
                               i propri filmati e visionare quelli inseriti dagli altri. Il sito è stato spesso al centro di contestazioni, in particolare 
                               legate all'inserimento di filmati coperti da diritto d'autore o per la violazione della privacy. </div>
     <img class="Logo" data-id="1" src="images/logo_youtube.png"/>
     <img class="cuoreV" data-likes=1 src="images/cuoreVuoto.png">
     
    </div>
 </section>


 <section class="sezione">
  <div class="numerazione"> 2 </div>
  <div class="paragrafo">
    <div class="Titolo"> WHATSAPP </div>
    <div class="Utenti">  2 miliardi di utenti attivi mensili  </div>
    <div class="Descrizione"> Applicazione di messaggistica istantanea per dispositivi mobili multipiattaforma che, attraverso la connessione a Internet, 
                              consente lo scambio tra uno o più utenti di messaggi di testo e file multimediali. Scaricabile e utilizzabile gratuitamente per un periodo
                              di dodici mesi, al termine dei quali è stato inizialmente necessario sottoscrivere un abbonamento del costo annuo inferiore a un euro, 
                              abolito a partire dal 2016, l’applicazione è stata creata nel 2009 da J. Koum e B. Acton, e al giugno 2013 ha registrato un traffico pari 
                              a 27 miliardi di messaggi al giorno, soppiantando di fatto la messaggistica via SMS e arrivando a contare 450 milioni di utenti. 
                              Nel febbraio 2014 il fondatore e amministratore delegato di Facebook M. Zuckerberg ha annunciato l'acquisizione di W. per 19 miliardi di 
                              dollari, assicurando che la app continuerà a operare in forma indipendente mantenendo il proprio marchio. Dall'aprile 2015 l'applicazione 
                              ha reso disponibile il servizio di chiamate VoIP per i dispositivi Android e iOs, mentre dal 2016 - data in cui ha superato il miliardo 
                              di utenti - ha introdotto la possibilità di condividere documenti PDF in chat, iniziando a utilizzare la crittografia end-to-end per 
                              proteggere i messaggi di chat e le chiamate vocali, garantendo così maggiore sicurezza agli utenti; nello stesso anno sono state lanciate
                              due nuove app che hanno permesso di utilizzare il servizio su Mac e PC, sincronizzandoli con lo smartphone. La versione rilasciata nel 
                              2021 consente di inviare e ricevere da un altro dispositivo anche nel caso in cui lo smartphone non sia collegato alla rete dati; allo 
                              stesso anno il numero di utenti attivi è di1 miliardo e 600 milioni, distribuiti in oltre 180 Paesi. </div>
    <img class="Logo" data-id="2" src="images/logo_whatsapp.jpeg"/>
    <img class="cuoreV" data-likes=2 src="images/cuoreVuoto.png"/>
   </div>
  </section>


  <section class="sezione">
   <div class="numerazione"> 3 </div>
   <div class="paragrafo">
    <div class="Titolo"> FACEBOOK </div>
    <div class="Utenti"> 2,70 miliardi di utenti attivi mensili </div>
    <div class="Descrizione"> Sito web fondato nel febbraio 2004 da M. Zuckerberg e D. Moskowitz. Nato come rete di interazione fra studenti universitari statunitensi,
                              ha gradualmente esteso la sua utenza all’intera rete telematica ed è divenuto il principale social network presente in Internet. 
                              In ragione delle sue numerose applicazioni (chat, condivisione di file, video, foto), il sito conta al giugno 2021 2,8 miliardi di utenti
                              mensili attivi (1,84 miliardi attivi quotidianamente). Quotato in borsa dal maggio 2012 con una delle offerte pubbliche di vendita più 
                              ingenti della storia degli Stati Uniti, negli anni successivi il social network è stato al centro di controversie rispetto a un suo 
                              possibile utilizzo come mezzo di controllo e di acquisizione di dati sensibili, e più recentemente per le accuse di gravi violazioni 
                              interne sul piano etico. Nell'ottobre 2021 Zuckerberg ha annunciato un cambio di denominazione della società che controlla la piattaforma 
                              in Meta Platforms, Inc., annunciando la creazione di una zona di convergenza di spazi virtuali interattivi definita metaverso. </div>
    <img class="Logo" data-id="3" src="images/facebook_logo2.png"/>
    <img class="cuoreV" data-likes=3 src="images/cuoreVuoto.png"/>
   </div>
  </section>


  <section class="sezione">
   <div class="numerazione"> 4 </div>
   <div class="paragrafo">
    <div class="Titolo"> INSTARGRAM </div>
    <div class="Utenti"> oltre 2 miliardo di utenti attivi mensili </div>
    <div class="Descrizione"> Applicazione ideata da K. Systrom e M. Krieger, disponibile dal 2010 per i dispositivi iOS e dall’aprile 2012 anche per gli Android. I.
                              consente di scattare fotografie con il proprio smartphone per poi ritoccarle e pubblicarle online, condividendole anche su social network
                              (come Twitter o Facebook) o piattaforme (per esempio Tumblr); in appena due anni ha superato i venticinque milioni di utenti e ha 
                              rivoluzionato la condivisione delle immagini via web. Nell'aprile del 2012 M. Zuckerberg ha annunciato l’acquisto di I. da parte di 
                              Facebook per un miliardo di dollari e a settembre dello stesso anno l'acquisizione è stata completata per 741 milioni. Nel 2021 Instagram
                              ha superato 1 miliardo di utenti attivi, e oltre 500 milioni di accessi quotidiani. </div>
    <img class="Logo"  data-id="4" src="images/instagram_logo1.jpg"/>
    <img class="cuoreV" data-likes=4 src="images/cuoreVuoto.png"/>
   </div>
  </section>


  <section class="sezione">
   <div class="numerazione"> 5 </div>
   <div class="paragrafo">
    <div class="Titolo"> TWITTER </div>
    <div class="Utenti"> Twitter ha 330 milioni di utenti attivi mensili </div>
    <div class="Descrizione"> Sito internet che fornisce un servizio gratuito di social network e microblogging. Gli iscritti possono inviare messaggi di testo lunghi
                              al massimo 140 battute, dal 2017 280 battute. Il nome deriva dal verbo inglese to tweet («cinguettare»). Il prototipo di T. venne creato
                              a San Francisco nel marzo 2006 da J. Dorsey, E. Williams e B. Stone e fu utilizzato come servizio di comunicazione interna per i 
                              dipendenti del sito internet Odeo.com.; la versione aperta al pubblico fu lanciata nel luglio dello stesso anno, e a ottobre i tre 
                              fondatori e altri membri di Odeo costituirono la società Obvious corporation che poi acquisì tutti i beni di quella di partenza, tra cui 
                              il sito Twitter. Per utilizzare T. è necessaria una registrazione. I messaggi sono pubblici, cioè visibili da tutti gli internauti. 
                              Gli iscritti possono aggiornare il proprio profilo tramite il sito stesso oppure via sms, con programmi di messaggistica, e-mail o 
                              applicazioni ad hoc. Gli iscritti a T. sono singoli internauti, ma anche aziende, associazioni, gruppi, partiti politici, personaggi 
                              dello spettacolo e dello sport. I tweet dell’utente vengono visualizzati da chi ha scelto di seguirlo (follow), tuttavia un motore di 
                              ricerca interno al sito permette di navigare per parole chiave e di aggiungere nuovi internauti alla propria lista di contatti. 
                              Al 2021 il servizio conta 1,3 miliardi di account e 330 milioni di utenti attivi mensili. </div>
    <img class="Logo" data-id="5" src="images/twitterrz.png"/>
    <img class="cuoreV" data-likes=5 src="images/cuoreVuoto.png"/>
   </div>
  </section>

 <footer>
  <div id="intestazione_finale">© 2022 SOCIAIEL <br></div>
  STUDENTE: Francesco Aiello <br>
  MATRICOLA: 1000003387</p>
 </footer>

</article>

</body>

</html>
