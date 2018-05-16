<?php
  include 'mod/general/cssLibraries.php';
?>
<link rel="stylesheet" href="css/index.css">
<title>Mexico - vegano</title>
</head>
<body>

<?php include 'mod/general/navbar.php' ?>

<!-- SHOWCASE SLIDER -->
<section id="showcase">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item carousel-image-1 active">
        <div class="container">
          <div class="carousel-caption d-none d-sm-block text-right mb-5">
            <h1 class="display-3">Directorio</h1>
            <p class="lead">Busca entre las mejores tiendas naturistas y veganas de la ciudad.</p>
            <a href="#" class="btn btn-danger btn-lg">Sumate <i class="fa fa-child"></i></a>
          </div>
        </div>
      </div>

      <div class="carousel-item carousel-image-2">
        <div class="container">
          <div class="carousel-caption d-none d-sm-block mb-5">
            <h1 class="display-3">Recetario</h1>
            <p class="lead">Las mejores recetas, sin excluir ningun tipo de gusto.</p>
            <a href="recetario.html" class="btn btn-primary btn-lg">Ver más</a>
          </div>
        </div>
      </div>

      <div class="carousel-item carousel-image-3">
        <div class="container">
          <div class="carousel-caption d-none d-sm-block text-right mb-5">
            <h1 class="display-3">Argumentos</h1>
            <p class="lead">¿Aún no estas convencido? dale un vistazo a esto.</p>
            <a href="argumentos.html" class="btn btn-success btn-lg">Ver más</a>
          </div>
        </div>
      </div>
    </div>

    <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
      <span class="carousel-control-prev-icon"></span>
    </a>

    <a href="#myCarousel" data-slide="next" class="carousel-control-next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</section>

<!-- HOME ICON SECTION -->
<section id="home-icons" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4 text-center">
        <img src="img/iconos/ICONO_QUEVEGANISMO.png" alt="" height="50px">
        <h3>¿Qué es el veganismo?</h3>
        <p id="text-1" class="text-compressed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis sint, debitis, molestias deleniti voluptas ipsam. Aperiam quasi, repellat ab voluptatibus nobis ducimus adipisci delectus similique. Molestiae possimus ipsum perspiciatis optio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, fugiat delectus doloremque,  </p>
        <button href="" class="btn btn-vegan collapser" data-target-text="text-1">Leer más</button>
      </div>
      <div class="col-md-4 mb-4 text-center">
          <img src="img/iconos/ICONO_PORQUEVEGAGO.png" alt="" height="50px">
        <h3>¿Por que ser vegano?</h3>
          <p id="text-2" class="text-compressed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, fugiat delectus doloremque, suscipit veniam modi, unde facilis placeat labore porro provident voluptatibus minus consequuntur ... </p>
          <button href="" class="btn btn-lila collapser" data-target-text="text-2">Leer más</button>
      </div>
      <div class="col-md-4 mb-4 text-center">
          <img src="img/iconos/ICONO_VEGANOPORELMEDIOAMBIENTE.png" alt="" height="50px">
        <h3>Veganos por el medio ambiente</h3>
        <p id="text-3" class="text-compressed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, fugiat delectus doloremque, suscipit veniam modi, unde facilis placeat labore porro provident voluptatibus minus consequuntur, saepe eveniet fuga harum doloribus beatae. Lorem ipsum dolor sit amet, consectetur adipisici </p>
        <button href="argumentos.html" class="btn btn-vegan collapser" data-target-text="text-3">Leer más</button>
      </div>
    </div>
    <a href="argumentos.html" class="btn btn-outline-vegan btn-block">Leer más argumentos</a>
  </div>
</section>

<!-- HOME HEADING SECTION -->
<section id="home-heading" class="p-5">
  <div class="dark-overlay">
    <div class="row">
      <div class="col">
        <div class="container pt-5">
          <h1>Comienza un cambio</h1>
          <p class="d-none d-md-block">Por el medio ambiente, por los animales, por salud o por multiples razones que existen, unete a nosotros, publica tu negocio, comparte tus recetas e informate.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INFO SECTION -->
<section id="info" class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <h3>Investiga y diseña recetas</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae eaque quos eligendi, laboriosam. Culpa consequuntur illum facere id molestias.</p>
        <a href="#" class="btn btn-outline-lila btn-block btn-lg">Vamos <i class="fa fa-angle-double-right"></i></a>
      </div>
      <div class="col-md-6">
        <img src="img/slide7.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>

<!-- VIDEO PLAY SECTION -->
<section id="video-play">
  <div class="dark-overlay">
    <div class="row">
      <div class="col">
        <div class="container p-5">
          <a
            href="#"
            class="video"
            data-video="https://www.youtube.com/watch?v=sNc6oBF9A5c"
            data-toggle="modal"
            data-target="#videoModal"
          >
            <i class="fa fa-play"></i>
          </a>
          <h1>Inspiración</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PHOTO GALLERY -->
<section id="gallery" class="py-5">
  <div class="container">
    <h1 class="text-center">Nuestras recetas más populares</h1>
    <div class="row mb-4">
      <div class="col-md-4">
        <a href="img/sanwis.jpg" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="img/sanwis.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="http://lorempixel.com/560/560/food/2" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="http://lorempixel.com/400/400/food/2" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="http://lorempixel.com/560/560/food/3" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="http://lorempixel.com/400/400/food/3" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-4">
        <a href="http://lorempixel.com/560/560/food/4" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="http://lorempixel.com/400/400/food/4" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="http://lorempixel.com/560/560/food/5" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="http://lorempixel.com/400/400/food/5" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="http://lorempixel.com/560/560/food/6" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="http://lorempixel.com/400/400/food/6" class="img-fluid">
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'mod/general/footer.php' ?>
