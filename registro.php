<?php
  session_start(); 

  if (isset($_SESSION['usuario'])){
    header("location: bienvenida.php");
  
  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

    

    <main>
      <div class="contenedor__todo">
        <div class="caja__trasera">
          <div class="caja__trasera-login">
            <h3>La libertad financiera comienza con la educación.</h3>
            <p></p>
            <p>¿Ya tienes una cuenta?</p>
            <button id="btn__iniciar-sesion">Iniciar Sesion</button>
          </div>

          <div class="caja__trasera-register">
            <h3>Cuando aprendes a gestionar tu dinero, transformas tu vida.</h3>
            <p>¿No tienes cuenta?</p>
            <button id="btn__registrarse">Registrate</button>
          </div>
        </div>
        <!--Formulario de login y registro-->
        <div class="contenedor__login-register">
          <!--Formulario de login-->
          <form action="php/login_usuario.php" method= "POST" class="formulario__login">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo Electronico" name = "correo"/>
            <input type="password" placeholder="Contraseña" name = "password"/>
            <button>Entrar</button>
          </form>
          <!--Formulario de registro-->
          <form action="php/registro_usuario.php" method="POST"class="formulario__register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre Completo" name = "nombre_completo"/>
            <input type="text" placeholder="Correo Electronico" name="correo"/>
            <input type="text" placeholder="Usuario" name="usuario"/>
            <input type="password" placeholder="Contraseña" name="password"/>
            <button>Registrarse</button>
          </form>
        </div>
      </div>
    </main>

    <script src="js/registro.js"></script>
  </body>
</html>
