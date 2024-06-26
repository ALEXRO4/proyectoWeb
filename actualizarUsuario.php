<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="recursos/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="recursos/hojasEstilo/estilos-TerceraPagina.css">
    <link rel="shortcut icon" href="recursos/Media/logo-removebg-preview.png" type="image/x-icon">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ACTUALIZAR</title>
  </head>

  <body>
<!-- aqui inica el navbar -->

  <nav >

          <div class="nav-wrapper">
            <a href="recursos/Media/vine.jpeg" class="brand-logo right"><img src="recursos/Media/logo-removebg-preview.png" alt="logo" width="60px" style="margin-top: 5px;" ></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li><a href="index.php">Home</a></li>
              <li><a href="formulario.php">Citas</a></li>
              <li><a href="verCitas.php">Revisar Citas</a></li>
            </ul>
            <div class="titulo_principal"><b>VELOCIMOTOR</b></div>
            
          </div>
    </nav>



      
 <!--aqui inicia el formilario  -->
<form action="./updateUsuario.php" method="post" >

<!-- Aqui va el formulario -->

<div class="row">
<div class="col s12 m4 l2"><p></p></div>
<div class="col s12 m4 l8 form-formato"><p>
    
  <h3 style="text-align: center;">Agenda tu cita:</h3>

  <div class="card-panel hoverable"> 
      

<!-- Primer campo nombre -->

<section>
<div class="row">
<div class="input-field col s12">
<input id="actualizar" type="text" class="validate" style="text-align: center;" name="actualizar"  required>
<label for="actualizar" style="text-align: center;">Numero de Cita</label>
</div>
</div>
</section>

<!-- Segundo campo nombre -->

<section>
<div class="row">
<div class="input-field col s12">
<input id="nombre" type="text" class="validate" style="text-align: center;" name="nombre"  required>
<label for="nombre" style="text-align: center;">Nombre Completo</label>
</div>
</div>
</section>

<!-- Tercer campo email -->

<section>
<div class="row">
<div class="input-field col s12">
<input id="email" type="email" class="validate" style="text-align: center;"  name="email"  required>
<label for="email" style="text-align: center;">Email</label>
</div>
</div>
</section>


<!-- Cuarto campo phone-->

<section>
<div class="row">
<div class="input-field col s12">
<input id="phone" type="number" class="validate" style="text-align: center;" name="phone" maxlength="10" required>
<label for="phone" style="text-align: center;">Telefono</label>
</div>
</div>
</section>


<!-- Quinto campo fecha-->

<section>
<div class="row">
<div class="input-field col s12">
<input  id="fecha" type="date" class="validate" style="text-align: center;" name="fecha" required>
<label for="fecha" style="text-align: center;">Agenda el dia de tu cita:</label>
</div>
</section>


<!-- Sexto campo descripcion-->

<section>
<div class="row">
<div class="input-field col s12">
<input id="descripcion" type="text" class="validate" style="text-align: center;" name="descripcion">
<label for="descripcion" style="text-align: center;">Notas</label>
</div>
</div>
<p class = "aviso"> Ingrese su nueva informacion y su numero de cita asignado para efectuar el cambio</p>
</section>


  </div>


</p></div>
<div class="col s12 m4 l2"><p></p></div>
</div>



<center>
<button class="btn waves-effect waves-light" type="reset" name="reset">Limpiar
  <i class="material-icons right">brush</i>
</button>

<button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
<i class="material-icons right">send</i>
</button>

<br><br>
<a href="verCitas.php">REGRESAR</a>
</center>
</form>


    </div>
    </p></div>
    <div class="col s12 m4 l2"><p>
    </p></div>
  </div>






    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="recursos/js/materialize.min.js"></script>
  </body>