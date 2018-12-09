<?php 
session_start();
 session_destroy();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGANE | Inicio Sesión</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <!--  <link rel="stylesheet" href="assets/css/compiled-4.5.15.min.css" /> -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/floating-labels.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
      <!-- Custom styles for this template -->   

</head>

<body class="body-Login-back">
    

    <div class="container">
       
       <div class="row">
            
     <form class="form-signin border">
      <div class="text-center mb-4">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>       
      </div>

      <div class="form-label-group">
        <label for="username">Usuario</label>
        <input type="text" id="username" class="form-control" placeholder="Usuario" required autofocus>
      </div>

      <div class="form-label-group">      
        <label for="password">Password</label>
        <input type="password" id="password" class="form-control" value="" placeholder="Password" required>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar usuario
        </label>
      </div>
      <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
      
     </form> 
    </div></div>
  

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/js/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/scripts/Login.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>