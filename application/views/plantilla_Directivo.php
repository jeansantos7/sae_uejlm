<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>Public/prueba/css/main.css">
        <link href="<?php echo base_url(); ?>Public/prueba/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <!-- SideBar -->
        <section class="full-box cover dashboard-sideBar">
            <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
            <div class="full-box dashboard-sideBar-ct">
                <!--SideBar Title -->
                <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                  

                   <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
                </div>
                <!-- SideBar User info -->
                <div class="full-box dashboard-sideBar-UserInfo">
                    <figure class="full-box">
                        <img src="<?php echo base_url(); ?>Public/assets/img/avatar.jpg" alt="UserIcon">
                        <figcaption class="text-center text-titles">Sr(a) <?php echo $user; ?></figcaption>
                    </figure>
                    <ul class="full-box list-unstyled text-center">
                        <li>
                            <a href="#!">
                                <i class="zmdi zmdi-settings"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="btn-exit-system">
                                <i class="zmdi zmdi-close"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- SideBar Menu -->
                <ul class="list-unstyled full-box dashboard-sideBar-Menu">

                    <li>
                        <a href="<?php echo base_url(); ?>">
                            <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="btn-sideBar-SubMenu">
                            <i class="zmdi zmdi-balance zmdi-hc-fw"></i> Cuadros de Calificacions <i class="zmdi zmdi-caret-down pull-right"></i>
                        </a>
                        <ul class="list-unstyled full-box">

                            <li>
                                <a href="<?php echo base_url('/MateriaNotas/index'); ?>"><i class="zmdi zmdi-font zmdi-hc-fw"></i>Subir Notas</a>
                            </li>
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
                        <a href="<?php echo base_url('/RegistroDocente/'); ?>"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Docentes</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('/RegistroSecretaria/'); ?>"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Secretaria</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/RegistroDirectivo/'); ?>"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Directivo</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/VistaPensiones/'); ?>"><i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Pensiones</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/VistaObservaciones/'); ?>"><i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Observaciones</a>
                    </li>



                </ul>
            </div>
        </section>

        <!-- Content page-->
        <section class="full-box dashboard-contentPage">
            <!-- NavBar -->
            <nav class="full-box dashboard-Navbar">
                <ul class="full-box list-unstyled text-right">
                    <li class="pull-left">
                        <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                    </li>
                    <li>
                        <a href="#!" class="btn-Notifications-area">
                            <i class="zmdi zmdi-notifications-none"></i>
                            <span class="badge">7</span>
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="btn-search">
                            <i class="zmdi zmdi-search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="btn-modal-help">
                            <i class="zmdi zmdi-help-outline"></i>
                        </a>
                    </li>

                </ul>
            </nav>

            <?php
            $this->load->view($contenido);
            ?>
        </section>

        <!-- Notifications area -->
        <section class="full-box Notifications-area">
            <div class="full-box Notifications-bg btn-Notifications-area"></div>
            <div class="full-box Notifications-body">
                <div class="Notifications-body-title text-titles text-center">
                    Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="zmdi zmdi-alert-triangle"></i>
                        </div>
                        <div class="row-content">
                            <div class="least-content">17m</div>
                            <h4 class="list-group-item-heading">Tile with a label</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="zmdi zmdi-alert-octagon"></i>
                        </div>
                        <div class="row-content">
                            <div class="least-content">15m</div>
                            <h4 class="list-group-item-heading">Tile with a label</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="zmdi zmdi-help"></i>
                        </div>
                        <div class="row-content">
                            <div class="least-content">10m</div>
                            <h4 class="list-group-item-heading">Tile with a label</h4>
                            <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="zmdi zmdi-info"></i>
                        </div>
                        <div class="row-content">
                            <div class="least-content">8m</div>
                            <h4 class="list-group-item-heading">Tile with a label</h4>
                            <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Dialog help -->
        <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Help</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Scripts -->
        <script src="<?php echo base_url(); ?>Public/prueba/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>Public/prueba/js/sweetalert2.min.js"></script>
        <script src="<?php echo base_url(); ?>Public/prueba/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>Public/prueba/js/material.min.js"></script>
        <script src="<?php echo base_url(); ?>Public/prueba/js/ripples.min.js"></script>
        <script src="<?php echo base_url(); ?>Public/prueba/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo base_url(); ?>Public/prueba/js/main.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url('public/prueba/js/jquery.validate.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/prueba/js/additional-methods.js'); ?>" type="text/javascript"></script>
        <script> $(document).ready(function () {
                $('#myTable').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    }
                });
                $('#myTable2').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    }
                });
                

            });</script>
    </body>
</html>