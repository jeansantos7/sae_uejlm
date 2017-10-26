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
  <body>
<div id="container" class="col-md-100">

		<!-- aqui va el contenido de la vista-->
		<?php
		 $this->load->view($contenido);
		?>
			


		</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>	