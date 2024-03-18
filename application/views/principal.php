

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
 

<!-- NAVBAR -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <!-- Container wrapper -->
  <div class="container-fluid">
    <div class="navbar-header">
      
      <!-- Navbar brand -->
       <!-- Logo -->
  <a class="navbar-brand logo-container logo-container-fluid" href="https://mdbgo.com/">
  <?php
              if(!empty($logo)){
              foreach($logo as $item){
                echo '<img class="logo-container logo-container-fluid" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?> 
<!-- hola -->
      CLEAN PRO SERVICES
    </a>
        </div>

        <!--HAMBURGUESA--->
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
      <span class="icon-bar"></span>
        <span class="icon-bar"></span>
          </button>
    <!--TERMINA HAMBURGUESA-->

  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
    <li class="active"><a href="#">Inicio</a></li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Servicios<span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="#">Limpieza Residencial</a></li>
          <li><a href="#">Limpieza Comercial</a></li>
          <li><a href="#">Servicios Especiales</a></li>
          </ul>
      </li>
        <li><a href="#">Únete</a></li>
            <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conócenos<span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="#">Certificaciones</a></li>
          <li><a href="#">Código ético</a></li>
          <li><a href="#">Sostenibilidad</a></li>
          </ul>
      </li>
            <li><a href="#">Contáctanos</a></li>
      </ul>
       

      <!-- Left links -->

      <div class="d-flex align-items-center">
        <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
          Ingresar
        </button>
        <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
          Registrarme
        </button>
       
    </div>
    <!-- Collapsible wrapper -->
    </div>
  </div>     
</nav>
  <!--TERMINA NAVBAR-->





  



<!--INICIA CAROUSEL-->


        



<!-- Carousel wrapper -->
<div
  id="carouselVideoExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
      echo '<video class="img-fluid" autoplay loop muted><source src="' . $item['ruta_imagen'] . 'type="video/mp4"/></video>'; 
            }
          }
          ?>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
        <!-- Single item -->
    <div class="carousel-item">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
      echo '<video class="img-fluid" autoplay loop muted><source src="' . $item['ruta_imagen'] . 'type="video/mp4"/></video>'; 
            }
          }
          ?>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
      echo '<video class="img-fluid" autoplay loop muted><source src="' . $item['ruta_imagen'] . 'type="video/mp4"/></video>'; 
            }
          }
          ?>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>-->
</div>


<!-- Carousel wrapper -->












<!--CUERPO DE PAGINA-->
<body>
<html>
        <div id="inicio" class="container text-center">
        
        
        
      
        
            <div class="card mb-3 ">
        <?php
              if(!empty($imagen4)){
              foreach($imagen4 as $item){
                echo '<img class="img-fluid img-thumbnail card-img-bottom" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?> 
  <div class="card-body">
    <?php if(!empty($contenido_encabezado)){
            foreach($contenido_encabezado as $item){
              echo '<h1 class="card-title">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text">'. $item['contenido'] . '</em></h2>';
            }
          }
          ?>
    </p>
    <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small>
    </p>
  </div>
        </div>
      


        <!--TERMINA LOGO-->

        <!--EMPIEZA CARTAS-->
        
        <seccion>
        
        <div class="container container-fluid ">
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="img-fluid img-thumbnail">
              <?php
              if(!empty($imagen)){
              foreach($imagen as $item){
                echo '<img class="img-fluid img-thumbnail" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?> 
               <?php if(!empty($contenido_encabezado2)){
            foreach($contenido_encabezado2 as $item){
              echo '<h1>' . $item['nombre'] . '</h1>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
        </div> 
        </div>
        <div class="container container-fluid">
              <div class="row">
              <div class="col-sm-6 col-md-4">
              <div class="img-fluid img-thumbnail">
              <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class="img-fluid img-thumbnail" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?>
              <?php if(!empty($contenido_encabezado3)){
            foreach($contenido_encabezado3 as $item){
              echo '<h1>' . $item['nombre'] . '</h1>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
              </div>
        </div>
        <div class="container container-fluid">
              <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="img-fluid img-thumbnail">
              <?php
              if(!empty($imagen3)){
              foreach($imagen3 as $item){
                echo '<img class="img-fluid img-thumbnail" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?>
             <?php if(!empty($contenido_encabezado4)){
            foreach($contenido_encabezado4 as $item){
              echo '<h1>' . $item['nombre'] . '</h1>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
        </div>
          </div>
            </div>
              </div>
              
        </seccion>
        <!---------------------INICIA PLANES DE SERVICIOS-->
          
      <br><br>
            <seccion>
              
              <div class="container-fluid">
                 <div class="img-fluid img-thumbnail jumbotron jumbotron-fluid">

       <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
          <?php
              if(!empty($banner)){
              foreach($banner as $item){
                echo '<img class="img-fluid img-thumbnail" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?>
</div>

    <div class="col-md-8">
      <div class="card-body">
      <?php if(!empty($contenido_encabezado5)){
            foreach($contenido_encabezado5 as $item){
              echo '<h1 class="card-title card-body">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>
  </div>
</div>
        </div>







       

        







        <div class="container-fluid">
                 <div class="img-fluid img-thumbnail ">

       <div class="card mb-3">
        <div class="row g-0">
          <div class="col-lg-12">
          <?php
              if(!empty($banner2)){
              foreach($banner2 as $item){
                echo '<img class="img-fluid img-thumbnail" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?>
</div>

    <div class="col-lg-12">
      <div class="card-body">
      <?php if(!empty($contenido_encabezado11)){
            foreach($contenido_encabezado11 as $item){
              echo '<h1 class="card-title card-body">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>
  </div>
</div>
        </div>
        </div>


        <br>
<br>
<br>
<br>






        </seccion>
        
          


        <div class="container-fluid">
                 <div class="img-fluid img-thumbnail jumbotron jumbotron-fluid  ">

       <div class="card-img-top">
        <div class="row g-0">
          <div class="col-sm-12">
          <?php
              if(!empty($banner3)){
              foreach($banner3 as $item){
                echo '<img class="card-img-top img-fluid img-thumbnail" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?>
</div>

    <div class="col-lg-12">
      <div class="card-body">
      <?php if(!empty($contenido_encabezado12)){
            foreach($contenido_encabezado12 as $item){
              echo '<h2 class="card-text card-body">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>
  </div>
</div>
        </div>
        </div>



<br>
<br>
<br>
<br>


        <!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
  <?php if(!empty($contenido_encabezado6)){
            foreach($contenido_encabezado6 as $item){
              echo '<h1>' . $item['nombre'] . '</h1>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
          
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
        <?php if(!empty($contenido_encabezado9)){
            foreach($contenido_encabezado9 as $item){
              echo '<h1>' . $item['nombre'] . '</h1>';
              echo '<p><em>'. $item['contenido'] . '</em></p>';
            }
          }
          ?>
        </div>
        <div class="panel-body">
        
             <?php if(!empty($contenido_encabezado7)){
            foreach($contenido_encabezado7 as $item){
              echo '<strong><h3>' . $item['nombre'] . '</h3></strong>';
              echo '<p><em>'. $item['contenido'] . '</em></p>';

            }
          }
          ?>
          
        </div>
        <div class="panel-footer">
        <?php if(!empty($precio_basico)){
            foreach($precio_basico as $item){
              echo '<h1>' . $item['nombre'] . '</h1>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
          <button class="btn btn-lg">Registrar</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-6">
    <div class="panel panel-default text-center">

        <div class="panel-heading">
        <?php if(!empty($contenido_encabezado10)){
            foreach($contenido_encabezado10 as $item){
              echo '<h1>' . $item['nombre'] . '</h1>';
              echo '<p><em>'. $item['contenido'] . '</em></p>';
            }
          }
          ?>
        </div>
        <div class="panel-body text-center">
        <?php if(!empty($contenido_encabezado8)){
            foreach($contenido_encabezado8 as $item){
              echo '<h3>' . $item['nombre'] . '</h3>';
              echo '<p><em>'. $item['contenido'] . '</em></p>';
            }
          }
          ?>
        </div>
        <div class="panel-footer text-center">
        <?php if(!empty($precio_pro)){
            foreach($precio_pro as $item){
              echo '<h1>' . $item['nombre'] . '</h1>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
          <button class="btn btn-lg">Registrar</button>
        </div>
      </div>      
    </div>       
       
  </div>
</div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
<br>
<br>
<br>












        