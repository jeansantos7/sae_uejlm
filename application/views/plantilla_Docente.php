    <?php
                    $this->load->view($contenido);
                    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="stylesheet" href="<?php echo base_url(); ?>Public/prueba/css/main.css">
    </head>
<body>
    <!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            
            <!-- SideBar User info -->
            <div class="full-box dashboard-sideBar-UserInfo">
                <figure class="full-box">
                    <img src="./assets/img/avatar.jpg" alt="UserIcon">
                    <figcaption class="text-center text-titles"> <?php echo $user;?></figcaption>
                </figure>
                <ul class="full-box list-unstyled text-center">
                    <li>
                        <a href="#!">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="btn-exit-system">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- SideBar Menu -->
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                

                <li>
                    <a href="<?php echo base_url('/DOCENTE/'); ?>">
                        <i class="zmdi zmdi-case zmdi-hc-fw"></i> Inicio
                    </a>
                </li>


                <li>
                    <a href="<?php echo base_url('/MateriaNotas/index'); ?>" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-book zmdi-hc-fw"></i> Calificaciones 
                    </a>
                    
                </li>

                <li>
                            <a href="<?php echo base_url('/EstudiantePensiones/pensiones')?>"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Pensiones</a>
                        </li>

                        <li>
                            <a href="subject.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Observaciones</a>
                        </li>


               
            </ul>
        </div>
    </section>

    

    <!-- Notifications area -->
    
    

    <!-- Dialog help -->
    
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

</section>