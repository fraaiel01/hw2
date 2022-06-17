<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <title>Signup</title>
        <link rel="stylesheet" href="{{ url('css/registrazione.css') }}">
        <script  src="{{ url('js/registrazione.js') }}" defer="true"></script>
        <script> 
        const BASE_URL="{{ url('/') }}/"; //tutto cio che viene prima del nome della root (mettiamo qui perche chiaramente blade non si puo utilizzare  in js)
        </script>
        
        
    </head>

<body>
  @if($error == 'empty_fields')
  <section class="errores">Compilare tutti i campi</section>
  @elseif($error == 'bad_password')
  <section class="errores">Password non corrispondenti</section>
  @elseif($error == 'exist_email')
  <section class="errores">Nome utente gia in uso</section>
  @endif

<div id=pagina>
 <section>

 <div id='riquadro'>
 <h1>Effettua la registrazione!</h1>
  
<form name='signup' method='post'>
@csrf
    <div class="padre">
    <div class="nome">
        <label>Nome <br></label><input type="text" name="nome">
    </div>
    </div>

    <div class="padre">
    <div class="cognome">
        <label>Cognome<br></label><input type="text" name="cognome">
    </div>
    </div>

    <div class="padre">
    <div class="data">
        <label>Data di Nascita<br></label><input type="date" name="data">
    </div>
    </div>

    <div class="padre">
    <div class="email">
        <label>Email<br></label><input type="text" name="email">
    </div>
    </div>

    <div class="padre">
    <div class="password">
        <label>Password<br></label><input type='password' name='password'>
    </div>
    </div>

    <div class="padre">
    <div class="conferma_password">         
    <label>Conferma Password<br></label><input type='password' name='conferma_password'>
    </div>
    </div>

    <div class="err"></div>
    <div class="submit">
    <input type='submit' value="Registrati">
    </div> 
</form>

    <div class="signup">Hai un account? <a href="{{ url('login') }}">Accedi!</a></div>
  </div>

 </section>

 </div>

 </body>

</html>