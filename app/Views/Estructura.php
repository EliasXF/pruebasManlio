



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?=base_url()?>/public/Assets/Estilos.css">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

   
     <!-- ================== BEGIN BASE CSS STYLE ================== -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/css/default/app.min.css?v=6.22" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/css/default/theme/blue.min.css" rel="stylesheet" id="theme" />

    <link href="<?= base_url() ?>/public/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/morris/morris.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/css/jquery-confirm.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet" />

    <link href="<?= base_url() ?>/public/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/parsley/src/parsley.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/css/datatables.min.css" />
    <link href="<?= base_url() ?>/public/css/ekko-lightbox.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/intro-js/minified/introjs.min.css" rel="stylesheet" />

    <link href="<?= base_url() ?>/public/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/plugins/iCheck/all.css" rel="stylesheet">

    <link href="<?= base_url() ?>/public/css/mikrowisp.css?v=6.22" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/css/sweetalert.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/css/vis.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/css/extra.css?t=1578417565" rel="stylesheet" />
    <link href="<?= base_url() ?>/public/css/magnific-popup.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?= base_url() ?>/public/plugins/pace/pace.min.js"></script>
    <script src="<?= base_url() ?>/public/socket.io/socket.io.js"></script>

    <link href="<?= base_url() ?>/public/css/spectrum.css" rel="stylesheet" />
    <!-- ================== END BASE JS ================== -->

</head>

<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para acceder a la plataforma.</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas disfrutar de la plataforma.</p>

                        
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form id="loginForm" action="<?php echo base_url(); ?>/LController" method = "POST"  class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="email" placeholder="Correo Electrónico" required name= "correo" id="login-login">
                        <input type="password" placeholder="Contraseña" required name= "contrasenia" id="password-login">
                        <button type="submit">Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuarios.php" method = "POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name= "nombre_completo">
                        <input type="email" placeholder="Correo Electronico" name= "correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasenia">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="<?=base_url()?>/public/Assets/Js/script.js"></script>
      
</body>
</html>


    
