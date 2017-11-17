<!DOCTYPE html>
<html lang="es">
<head>
    <title>LogIn</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Public/prueba/css/main.css">
</head>
<body class="cover" style="background-image: url(Public/prueba/assets/img/fondo.jpg);">
    <form name="form1" method="POST" action="login/login_user" autocomplete="off" class="full-box logInForm">
        <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
        <p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
        <div class="form-group label-floating">
          <label class="control-label" for="UserEmail">Usuario</label>
          <input class="form-control" id="usuario" name="usuario" type="text">
          <p class="help-block">Escribe tú Usuario</p>
        </div>
        <div class="form-group label-floating">
          <label class="control-label" for="UserPass">Contraseña</label>
          <input class="form-control" id="contra" name="contra" type="password">
          <p class="help-block">Escribe tú contraseña</p>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
        </div>
    </form>
    <!--====== Scripts -->
    <script src="<?php echo base_url(); ?>Public/prueba/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>Public/prueba/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>Public/prueba/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>Public/prueba/js/ripples.min.js"></script>
    <script src="<?php echo base_url(); ?>Public/prueba/js/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>Public/prueba/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>Public/prueba/js/main.js"></script>
    <script>
        $.material.init();
    </script>
</body>
</html>