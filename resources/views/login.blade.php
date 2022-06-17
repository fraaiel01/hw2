<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url ('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body>
@if($error == 'empty_fields')
  <section class="errores">Compilare tutti i campi</section>
  @elseif($error == 'wrong')
  <section class="errores">Email e/o Password non corretti</section>
  @endif
    
<section>
 <div><img class="social" src="images/sociall.jpg"/></div>
    
     <div id="zona_login">

     <div id="box">
      <div id="titolo">SOCIAIEL</div> 
       <img class="utente" src="images/user.png"/>
        <div id="riquadro">
          <form name='login' method='post'>
            @csrf  
              <div class="email">
                  <label for='email'>Email <br></label>
                  <input type='text' name='email'>
              </div>
              
              <div class="password">
                <label for='password'>Password  <br></label>
                <input type='password' name='password'>
              </div>
       
              <div class="submit">
                <input type='submit' value="Accedi">
              </div>
          </form>
          <div class="signup">Non hai un account ? <a href= "{{ url('register') }}" >Registrati !</a></div>
        </div>
       </div> 
      </div>

</section>

</body>

</html>