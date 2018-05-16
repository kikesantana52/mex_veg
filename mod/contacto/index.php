<?php
  include '../general/InnercssLibraries.php';
?>
<link rel="stylesheet" href="css/index.css">
<title>Argumentos</title>
</head>
<body>
<?php include '../general/InnerNavbar.php' ?>

  <section id="contact">
    <div class="dk-overlay py-5">
      <div class="text-white">
        <h1>Contacto</h1>
        <p>Escribenos, estaremos felices de contestar dudas y atenderte.</p>
      </div>
    </div>
  </section>


  <!-- CONTACT SECTION -->
  <section id="" class="py-3">
    <div class="container ">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body">
              <h4>Informacion</h4>
              <h4>Domicilio</h4>
              <p>Av. Guadalupe #9999</p>
              <h4>Email</h4>
              <p>admin@mexicovegano.com</p>
              <h4>Phone</h4>
              <p>(333) 19 86 2224</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card p-4">
            <div class="card-body">
              <h3 class="text-center">Llena la forma para ponerte en contacto con nosotros</h3>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre(s)">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apellidos">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="phone" class="form-control" placeholder="Telefono">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Mensaje"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn btn-outline-danger btn-block">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <?php include '../general/InnerFooter.php' ?>
