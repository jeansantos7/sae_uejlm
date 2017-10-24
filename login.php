

<!DOCTYPE html>
<html>
<head >
<h2> Pagina de Login</h2>
	<title>
		Login

	</title>
</head>
<body>
<div class='Titulo'>
    <br><center><h2> Sistema de Administracion Escolar </h2></center>
    </div>

      <div id='Contenedor' >
            <h3 class='Titulo'>Autentifíquese para Ingresar al Sistema</h3>
           <div id='foto'></div>

           <div id='Login' class='Formu'>
            <center>
              <form action='' method='POST' name='Login'>
              Ingrese su Usuario:<br>
              <input type='text' id='nom_usuarios' name='nom_usuarios'><br><br>

              Ingrese su Contraseña:<br>
              <input type='password' id='pass_usuarios' name='pass_usuarios'><br><br>

              <input type='submit' value='Entrar' name='boton' id='boton' class='BotonB'>
              </form>
            </center>
      </div>
    </div>
</body>
</html>

<?php  



error_reporting(E_PARSE);
session_start();

$boton = ($_POST['boton']);

$nom_usuarios = $_POST['nom_usuarios'];
$pass_usuarios = $_POST['pass_usuarios'];

if ($boton == 'Entrar') {
    include('CONEXION/conexion.php');

    $Buscar = "Select * From administrador where nom_usuarios = '$nom_usuarios' && pass_usuarios = '$pass_usuarios'";
    $resultado = mysqli_query($enlace, $Buscar);
    $array = mysqli_fetch_array($resultado);       
 
    if (!$array){
          
     $Buscar1 = "Select * From docentes where cedula_Docentes = '$nom_usuarios' && pass_Docentes = '$pass_usuarios'";
    $resultado1 = mysqli_query($enlace, $Buscar1);
    $array1 = mysqli_fetch_array($resultado1);

    if (!$array1){
           echo "usuarios incorrecto";
     
    }
    else
    {
       //$_SESSION['Secretaria'] = $array['Nombre'];
       header('location: application/views/DOCENTES/docentes.php');  
    }   
    }
    else
    {
       //$_SESSION['Secretaria'] = $array['Nombre'];
       header('location: wwww.facebook.com');  
    }   

    


}


?>