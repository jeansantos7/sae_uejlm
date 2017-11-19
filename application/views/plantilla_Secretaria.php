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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js">

    </head>
    <body>
        <!-- SideBar -->
        <section class="full-box cover dashboard-sideBar">
            <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
            <div class="full-box dashboard-sideBar-ct">


                <!--SideBar Title -->
                <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                    Unidad Educativa Particular Juan Leon Mera <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
                </div>
                </br>
                </br>
                </br>
                <!-- SideBar User info -->
                <div class="full-box dashboard-sideBar-UserInfo">
                    <figure class="full-box">
                        <img src="./assets/img/avatar.jpg" alt="UserIcon">
                        <figcaption class="text-center text-titles"> <?php echo $user; ?></figcaption>
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
                        <a href="<?php echo base_url('/SECRETARIA/'); ?>">
                            <i class="zmdi zmdi-case zmdi-hc-fw"></i> Inicio
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('/PENSIONES/'); ?>"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Pensiones</a>
                    </li>
                    <li>
                        <a href="#!" class="btn-sideBar-SubMenu">
                            <i class="zmdi zmdi-account zmdi-hc-fw"></i> Matriculacion <i class="zmdi zmdi-caret-down pull-right"></i>
                        </a>
                        <ul class="list-unstyled full-box">
                            <li>
                                <a href="<?php echo base_url('/RegistroEstudiante/'); ?>"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Registrar Estudiante</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Registrar Padres de Familia</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('/Representante/'); ?>"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Registrar Representante</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('/Matriculacion/'); ?>"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Matricular</a>
                            </li>




                        </ul>

                        <a href="#!" class="btn-sideBar-SubMenu">
                            <i class="zmdi zmdi-balance zmdi-hc-fw"></i> Cuadros de Calificacions <i class="zmdi zmdi-caret-down pull-right"></i>
                        </a>
                        <ul class="list-unstyled full-box">

                            <li>
                                <a href="<?php echo base_url('/ActasCalificaciones/q1'); ?>"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Primer Quimestre</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('/ActasCalificaciones/q2'); ?>"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Segundo Quimestre</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('/ActasCalificaciones/extra'); ?>"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Supletorios</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('/ActasCalificaciones/'); ?>"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Cuadro General</a>
                            </li>


                        </ul>

                    <li>
                        <a href="<?php echo base_url('/RegistroDocente/'); ?>"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Docentes</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('/Cursos/'); ?>"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Cursos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/Materias/'); ?>"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Materias</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/Asignacion/'); ?>"><i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Asignacion</a>
                    </li>


                    <li>


                        </div>
                        </section>



                        <!-- Notifications area -->
                        <!-- NavBar -->



                        <!-- Dialog help -->

                        <!--====== Scripts -->
                        <script src="<?php echo base_url(); ?>Public/prueba/js/jquery-3.1.1.min.js"></script>
                        <script src="<?php echo base_url(); ?>Public/prueba/js/bootstrap.min.js"></script>
                        <script src="<?php echo base_url(); ?>Public/prueba/js/material.min.js"></script>
                        <script src="<?php echo base_url(); ?>Public/prueba/js/ripples.min.js"></script>
                        <script src="<?php echo base_url(); ?>Public/prueba/js/sweetalert2.min.js"></script>
                        <script src="<?php echo base_url(); ?>Public/prueba/js/jquery.mCustomScrollbar.concat.min.js"></script>
                        <script src="<?php echo base_url(); ?>Public/prueba/js/main.js"></script>
                        <script src="<?php echo base_url(); ?>Public/js/jquery.validate.js" type="text/javascript"></script>
                        <script src="<?php echo base_url(); ?>Public/js/additional-methods.js" type="text/javascript"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
                        <script>
                            $.material.init();
                        </script>

                        </section>