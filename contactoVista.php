<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto / Benja Lazarte</title>
    <link rel="icon" href="img/logo/lawn-mower-384589_640.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body class="bg-dark cuerpo-imagen">

    <!-- Incluimos el header -->
    <?php include("includes/header.php");?>

    <!-- Incluimos el wsp-fixed -->
    <?php include("includes/fixed-wsp.php");?>

    <div class="contacto-titulo container">
      <h1>Contacto</h1>
    </div>
    <main class="bg-dark main-img">
        <div class="contacto-frase container">
          <h1>¡Cultivemos juntos la belleza en tu espacio verde! Contáctame para dar vida a tus ideas y hacer florecer tu jardín.</h1>
        </div>

        <div class="container contacto_main main-img">
              <form method="POST" class="form-contacto">
                <div class="form-flex">
                  <div class="form-label">
                    <div class="form-floating mb-5">
                      <input type="text" class="form-control" id="floatingInput nombre" placeholder="Nombre" name="nombre">
                      <label for="floatingInput">Nombre</label>
                    </div>
                
                    <div class="form-floating mb-5">
                      <input type="text" class="form-control" id="floatingInput telefono" placeholder="Telefono" name="telefono">
                      <label for="floatingInput">Telefono</label>
                     </div>
                
                    <div class="form-floating">
                      <input type="email" class="form-control" id="floatingInput correo" placeholder="Correo Electronico" name="correo">
                      <label for="floatingInput">Correo Electronico</label>
                    </div>
                  </div>

                  <div class="form-floating form-mensaje">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2 mensaje" maxlength="380" name="mensaje"></textarea>
                      <label for="floatingTextarea2">Mensaje</label>
                  </div>
              </div>
                
                                     
                <div class="d-grid gap-2 col-6 mx-auto boton-block">
                  <button class="btn btn-success" type="submit" name="submit">Enviar formulario</button>
                  <button class="btn btn-dark" type="reset">Limpiar Formulario</button>
                </div>
              </form>
            
            <div class="main_form-texto">
                <h3>¡Contactate con nosotros!</h3>
                <ul>
                    <li><i class="fa-solid fa-phone"></i> 1127088361</li>
                    <li><i class="fa-solid fa-at"></i><a href="mailto:benjaminlazarte123@gmail.com?subject=Formulario">benjaminlazarte123@gmail.com</a></li>
                    <li><i class="fa-solid fa-location-dot"></i> Buenos Aires / 9 de Abril</li>
                </ul>
            </div>
            <?php
            if(isset($_POST['submit']))
            if($enviado == "enviado"): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="bi bi-check"></i> Enviado con exito</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php elseif($enviado != "enviado") :?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="bi bi-exclamation-triangle-fill"></i> No se pudo enviar el mensaje</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif;?>

        </div>
    </main>

    <!-- Incluimos el footer -->
    <?php include("includes/footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ffb39b6180.js" crossorigin="anonymous"></script>
  </body>
</html>