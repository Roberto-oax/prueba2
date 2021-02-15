<?php
  #session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AmuebleZ</title>
    <link rel="stylesheet" href="vendor/bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <!-- Esta es nuestra hoja de estilos css para poder personalizar mejor nuestro sitio -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Insertamos el normalize para mantener los estilos similares en los navegadores, ya que cada uno agrega sus propios estilos por defecto -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons: para iconos mas persoalizados -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style: para usarla como plantilla base para el desarrollo de sitio (la parte del administrador) -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

    <div class="container-fluid">
        <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-2">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
    </div>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="dist/img/avatar5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AmuebleZ</span>
    </a>

    <center>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Opciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (isset($_GET["pagina"])):?>
                <?php if ($_GET["pagina"] == "registro"):?>
                  <li class="nav-item">
                    <img id="icono" src="img/compose.png" alt="Cobertura" class="img-fluid">
                    <a class="nav-link active" href="index.php?pagina=registro"><p>Registro</p></a>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                    <img id="icono" src="img/compose.png" alt="Cobertura" class="img-fluid">
                    <a class="nav-link" href="index.php?pagina=registro"><p>Registro</p></a>
                  </li>
                <?php endif ?>
                <?php if ($_GET["pagina"] == "cobertura"):?>
                  <li class="nav-item">
                    <img id="icono" src="img/worldwide.png" alt="Cobertura" class="img-fluid">
                    <a class="nav-link active" href="index.php?pagina=cobertura"><p>Cobertura</p></a>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                    <img id="icono" src="img/worldwide.png" alt="Cobertura" class="img-fluid">
                    <a class="nav-link" href="index.php?pagina=cobertura"><p>Cobertura</p></a>
                  </li>
                <?php endif ?>
                <?php if ($_GET["pagina"] == "inicio"):?>
                  <li class="nav-item">
                    <img id="icono" src="img/home-2.png" alt="Inicio" class="img-fluid">
                    <a class="nav-link active" href="index.php?pagina=inicio"><p>Inicio</p></a>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                    <img id="icono" src="img/home-2.png" alt="Inicio" class="img-fluid">
                    <a class="nav-link" href="index.php?pagina=inicio"><p>Inicio</p></a>
                  </li>
                <?php endif ?>
                <?php if ($_GET["pagina"] == "rastreo"):?>
                  <li class="nav-item">
                    <img id="icono" src="img/map-location.png" alt="Rastreo" class="img-fluid">
                    <a class="nav-link active" href="index.php?pagina=rastreo"><p>Rastreo</p></a>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                    <img id="icono" src="img/map-location.png" alt="Rastreo" class="img-fluid">
                    <a class="nav-link" href="index.php?pagina=rastreo"><p>Rastreo</p></a>
                  </li>
                <?php endif ?>
              <?php else: ?>
                <li class="nav-item">
                  <img id="icono" src="img/compose.png" alt="Cobertura" class="img-fluid">
                  <a class="nav-link active" href="index.php?pagina=registro"><p >Registro</p></a>
                </li>
                <li class="nav-item">
                  <img id="icono" src="img/worldwide.png" alt="Cobertura" class="img-fluid">
                  <a class="nav-link" href="index.php?pagina=cobertura"><p >Cobertura</p></a>
                </li>
                <li class="nav-item">
                  <img id="icono" src="img/home-2.png" alt="Inicio" class="img-fluid">
                  <a class="nav-link" href="index.php?pagina=inicio"> <p >Inicio</p></a>
                </li>
                <li class="nav-item">
                  <img id="icono" src="img/map-location.png" alt="Rastreo" class="img-fluid">
                  <a class="nav-link" href="index.php?pagina=rastreo"><p >Rastreo</p></a>
                </li>
              <?php endif ?>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </center>
  </aside>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style=" background: rgba(0, 0, 0, 0);">
    <!-- Main content -->
    <!-- Contenedor en el cual aparecera el contenido de las diferentes operaciones que se pueden realiar en el sitio como registrar, editar o leiminar -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                  <div class="container">
                    <div class="container">
                        <?php
                        if(isset($_GET["pagina"])){
                          if($_GET["pagina"] == "registro" ||
                          $_GET["pagina"] == "cobertura" ||
                          $_GET["pagina"] == "ingreso" ||
                          $_GET["pagina"] == "inicio" ||
                          $_GET["pagina"] == "editar" ||
                          $_GET["pagina"] == "rastreo"){
                            include "paginas/".$_GET["pagina"].".php";
                          }else{
                            include "paginas/error.php";
                          }
                        }else{
                          include "paginas/registro.php";
                        }
                        ?>
                    </div>            
                  </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  
 <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
   <!-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <strong>Todos los derechos reservados.</strong> Roberto Ruiz Espino
  </footer>
    
    <!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="vendor/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/60a5132044.js" crossorigin="anonymous"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>