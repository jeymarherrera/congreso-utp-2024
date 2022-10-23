<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Congreso UTP - 2024</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Logos UTP -->
  <link href="public/img/logo-utp-white.png" rel="icon">
  <link href="public/img/logo-utp-white.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="public/css/bootstrap/bootstrap.css" rel="stylesheet">
  <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Librarias CSS -->
  <script src="https://kit.fontawesome.com/3f6fcc0d63.js" crossorigin="anonymous"></script>
  <link href="public/css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="public/css/font-awesome/font-awesome.min.css" rel="stylesheet">
  <link href="public/css/animate/animate.min.css" rel="stylesheet">
  <link href="public/css/venobox/venobox.css" rel="stylesheet">
  <link href="public/css/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <!-- CSS -->
  <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="index.html" class="scrollto"><img src="public/img/logo-utp-white.png" alt="UTP" title=""></a>
      </div>
      <?php
      require_once 'view/template/header.php';
      ?>
    </div>
  </header>

  <!-- Contenido -->
    <!-- Cronograma -->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Cronograma</h2>
          <p>Este será nuestro cronograma de conferencias</p>
        </div>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Día 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Día 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Día 3</a>
          </li>
        </ul>

        
        
          <div class="tab-content row justify-content-center">
          <!-- Dia 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Bienvenida. </h4>
                <p>Bienvenida de los Organizadores del Congreso.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>La Innovación. <span>Brenden Legros</span></h4>
                <p>El Imperativo de Innovar para un desarrollo inclusivo y sustentable.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Topografía de superficie. <span>Hubert Hirthe</span></h4>
                <p>Uso de la Biología Básica para informar el Diseño de Dispositivos Médicos: Topografía de superficie.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Esforzándose para desarrollar la super-batería. <span>Cole Emmerich</span></h4>
                <p>La que ofrece alta potencia, alta capacidad de almacenamiento, bajo costo, y que es sustentable.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Robótica. <span>Jack Christiansen</span></h4>
                <p>Investigación, educación, y educación en investigación con robótica.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Oportunidades y desafíos en la Educación Superior. <span>Alejandrin Littel</span></h4>
                <p>Un enfoque Personal, Evolutivo y Experiencial.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Desarrollo de tecnologías. <span>Willow Trantow</span></h4>
                <p>Calzado ortopédico sostenible y asequible para países en desarrollo utilizando materiales múltiples funcionales sostenibles y tecnologías de Industria 4.0.</p>
              </div>
            </div>
          </div>

          <!-- Dia 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

          <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Bienvenida. </h4>
                <p>Bienvenida de los Organizadores del Congreso.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/4.jpg" alt="Brenden Legros">
                </div>
                <h4>La Innovación. <span>Brenden Legros</span></h4>
                <p>El Imperativo de Innovar para un desarrollo inclusivo y sustentable.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/5.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Topografía de superficie. <span>Hubert Hirthe</span></h4>
                <p>Uso de la Biología Básica para informar el Diseño de Dispositivos Médicos: Topografía de superficie.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Esforzándose para desarrollar la super-batería. <span>Cole Emmerich</span></h4>
                <p>La que ofrece alta potencia, alta capacidad de almacenamiento, bajo costo, y que es sustentable.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/2.jpg" alt="Jack Christiansen">
                </div>
                <h4>Robótica. <span>Jack Christiansen</span></h4>
                <p>Investigación, educación, y educación en investigación con robótica.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/1.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Oportunidades y desafíos en la Educación Superior. <span>Alejandrin Littel</span></h4>
                <p>Un enfoque Personal, Evolutivo y Experiencial.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Desarrollo de tecnologías. <span>Willow Trantow</span></h4>
                <p>Calzado ortopédico sostenible y asequible para países en desarrollo utilizando materiales múltiples funcionales sostenibles y tecnologías de Industria 4.0.</p>
              </div>
            </div>
          </div>

          <!-- Dia 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

          <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Bienvenida.</h4>
                <p>Bienvenida de los Organizadores del Congreso.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>La Innovación. <span>Brenden Legros</span></h4>
                <p>El Imperativo de Innovar para un desarrollo inclusivo y sustentable.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Topografía de superficie. <span>Hubert Hirthe</span></h4>
                <p>Uso de la Biología Básica para informar el Diseño de Dispositivos Médicos: Topografía de superficie.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Esforzándose para desarrollar la super-batería. <span>Cole Emmerich</span></h4>
                <p>La que ofrece alta potencia, alta capacidad de almacenamiento, bajo costo, y que es sustentable.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Robótica. <span>Jack Christiansen</span></h4>
                <p>Investigación, educación, y educación en investigación con robótica.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Oportunidades y desafíos en la Educación Superior. <span>Alejandrin Littel</span></h4>
                <p>Un enfoque Personal, Evolutivo y Experiencial.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="public/img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Desarrollo de tecnologías. <span>Willow Trantow</span></h4>
                <p>Calzado ortopédico sostenible y asequible para países en desarrollo utilizando materiales múltiples funcionales sostenibles y tecnologías de Industria 4.0.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 




 <!-- Footer -->

 <?php
require_once 'view/template/footer.php';
?>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <!-- JavaScript Librarias -->
  <script src="public/js/jquery/jquery.min.js"></script>
  <script src="public/js/jquery/jquery-migrate.min.js"></script>
  <script src="public/js/bootstrap/bootstrap.min.js"></script>
  <script src="public/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="public/js/easing/easing.min.js"></script>
  <script src="public/js/superfish/hoverIntent.js"></script>
  <script src="public/js/superfish/superfish.min.js"></script>
  <script src="public/js/wow/wow.min.js"></script>
  <script src="public/js/venobox/venobox.min.js"></script>
  <script src="public/js/owlcarousel/owl.carousel.min.js"></script>
  <!-- Contactos -->
  <script src="public/js/contactform.js"></script>
  <!-- JS -->
  <script src="public/js/main.js"></script>
</body>
</html>
