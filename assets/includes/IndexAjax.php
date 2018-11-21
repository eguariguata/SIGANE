<!-- <?php
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname = ceilapaz";
   $credentials = "user=postgres password=root";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   

   
	$mensajeOk=false;
	$mensajeError='El sistema no se encuentra disponible';
	if(isset($_POST['username'],$_POST['password'])):
		if($_POST['username']!=""):
			if($_POST['password']!=""):
				$username=$_POST['username'];
				$password=$_POST['password'];
				$consulta=pg_query($conexion,("Select * from usuario where username='$username' and password='$password'"));
				if(pg_num_rows($consulta)>0):
					$mensajeOk=true;
					$Usua=pg_fetch_array($consulta);
					session_start();
					$_SESSION['idusuario']=$Usua[0];
					$_SESSION['username']=$Usua[1];
					$mensajeError='Logueado correctamente ok.';
				else:
					$mensajeError='Usuario o contraseña incorrecta.';
				endif;
			else:
				$mensajeError='Contraseña incorrecta.';
			endif;
		else:
			$mensajeError='Usuario no existe ok.';
		endif;
	else:
		$mensajeError='Todos los datos son requeridos.';
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError);
	echo json_encode($salidaJson);
}
?> -->