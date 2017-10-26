<?php


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('public/assets/global/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/assets/global/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');?>"rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css');?>"rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/assets/global/plugins/morris/morris.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/assets/global/plugins/fullcalendar/fullcalendar.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/assets/global/plugins/jqvmap/jqvmap/jqvmap.css');?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url('public/assets/global/css/components.min.css');?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url('public/assets/global/css/plugins.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url('public/assets/layouts/layout2/css/layout.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/assets/layouts/layout2/css/themes/blue.min.css');?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url('public/assets/layouts/layout2/css/custom.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <!--<link rel="shortcut icon" href="favicon.ico" />-->
         </head>
    <!-- END HEAD -->
  </head>
  <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

<div class="page-header navbar navbar-fixed-top">
  <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form search-form-expanded" action="page_general_search_3.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                           
                          
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../assets/layouts/layout2/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo_2.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
</div>
  

   <div class="page-header-inner ">
</div>



  <div class="page-container">
    
  <?php
     $this->load->view($contenido);
    ?>
  </div>


<div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            </div>
           
            <!-- END QUICK NAV -->
            <!--[if lt IE 9]>


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>	