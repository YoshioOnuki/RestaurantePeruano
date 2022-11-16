<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Restaurante Peruano</title>

  <!-- Icono de Página -->
  <!-- <link href="assets/img/" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-phone d-flex align-items-center"><span>+51 924 667 644</span></i>
          <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lunes - Domingo: 11AM - 10PM</span></i>
        </div>
      </div>
    </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0">Nombre Aqui</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Acerca de</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Platillos Especiales</a></li>
          <li><a class="nav-link scrollto" href="#events">Eventos</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Fotos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#footer" class="book-a-table-btn scrollto d-none d-lg-flex">Reserva Una Mesa</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenido a <span>Restaurant Nombre aqui</span></h1>
          <h2>Dando el mejor servicio por xx años</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Nuestro Menú</a>
            <!-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Contáctanos</a> -->
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=BgP9tzt9_Z8&list=RDBgP9tzt9_Z8&start_radio=1" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/CenaRomantica.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Historia del Restaurante Peruano...</h3>
            <br>
            <p>
              Somos una empresa dedicada al rubo de la gastronomía, creada con el propósito de brindar el mejor servicio y los mejores platillos regionales al público en general, con nuestra carta muy variada.
              Organizado por un equipo de humano profesional y especializado con más de x años de experiencia en el rubro gastronómico.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Consulta nuestro menú</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-starters">Entradas</li>
              <li data-filter=".filter-salads">Ensaladas</li>
              <li data-filter=".filter-specialty">Especialidad</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/JuaneGallina2.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Juane de Gallina</a><span>S/.20.00</span>
            </div>
            <div class="menu-ingredients">
              Este sabroso guiso de gallina, sazonado con especias y cubierto por hojas de bijao, es un verdadero manjar por su especial gusto, suave aroma y singular presentación.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Sopa de Langostinos</a><span>S/.15.00</span>
            </div>
            <div class="menu-ingredients">
              Langostinos, salsa de tomate, zanahoria, cebolla, caldo de pescado
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pastel de carne</a><span>S/.10.00</span>
            </div>
            <div class="menu-ingredients">
              El pastel de carne es un plato cuyo principal ingrediente es la carne, que consiste en carne picada de vaca, ternera, cordero o cerdo.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pan al ajo</a><span>S/.7.00</span>
            </div>
            <div class="menu-ingredients">
              Pan cubierto con ajo y aceite de oliva (preferiblemente extra virgen).
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/EnsaladaPaltaChota.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Ensalada de palta y chota</a><span>S/.8.00</span>
            </div>
            <div class="menu-ingredients">
              Esta rica ensalada tiene como ingrediente principal en preparación la Chonta, cuyo origen data de hace mucho tiempo, tan antiguo que no se tiene un registro claro de su época de cultivo.
            </div>
          </div>


          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/Sandwinch.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Sandwinch</a><span>S/.4.00</span>
            </div>
            <div class="menu-ingredients">
              Pan de molde de 4 pisos con mouse de pollo, tocino, jamón, lechuga, tomate, queso y huevo a la inglesa
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Ensalada griega</a><span>S/.9.00</span>
            </div>
            <div class="menu-ingredients">
              Consiste en esa deliciosa mezcla de queso feta, tomates, pepinos y aceitunas que la elevan a uno de los frescos platos veraniegos más rápidos y sabrosos.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Ensalada de espinaca</a><span>S/.9.00</span>
            </div>
            <div class="menu-ingredients">
              Champiñones frescos, huevo duro y vinagreta templada de bacon.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tacutacuArdiente.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tacu tacu ardiente</a><span>S/.12.00</span>
            </div>
            <div class="menu-ingredients">
              Clásico tacu tacu de la casa acompañado de salsa criolla huevo y plátano frito.
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Platillos Especiales</h2>
          <p>Consulta nuestros platillos especiales</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Filete de doncella en salsa de champiñones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Ensalada de frutas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Sopa seca</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Juane de Gallina</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Tacu tacu</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Filete de doncella en salsa de champiñones</h3>
                    <p class="fst-italic">Filete de pescado a la crema con champiñones. Es conocido el empleo de salsas y cremas en las elaboraciones de variadas recetas. En esta receta se emplea una deliciosa crema con champiñones, mezclada con el sabor de unos filetes de pescado que podemos disfrutar en familia.</p>
                    <p>Unos de los derivados de las salsas demiglace son las ""Salsa Champiñones"", con una reducción de fondo de champiñones según el vino que se le añade, se denomina salsa champiñones al chablis, al oporto, etc. Se utiliza para carnes, aves.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/champ.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ensalada de frutas</h3>
                    <p class="fst-italic">Postre frío elaborado con varias frutas generalmente aromatizadas con jarabe perfumado, a veces con aguardiente o licor.</p>
                    <p>Las frutas pueden ser crudas, secas y rehidratadas, o pochadas y enfriadas. Las ensaladas de frutas se combinan a veces con helados y sorbetes de frutas o de vainilla.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/frutas.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Sopa seca</h3>
                    <p class="fst-italic">Entre las pastas se encuentra la Sopa Seca que consiste en tallarines sazonados y con un especial aderezo. </p>
                    <p>Destacamos que años atrás, este plato se consideraba un plato para personas de clase baja, pero pasaron los años y ya empezó a ser consumido por personas de clase media limeña. Actualmente, la carapulcra se encuentra en el menú de los mejores restaurantes de Perú y es considerado uno de los platos típicos. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/seca.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Juane de Gallina</h3>
                    <p class="fst-italic">Este sabroso guiso de gallina, sazonado con especias y cubierto por hojas de bijao, es un verdadero manjar por su especial gusto, suave aroma y singular presentación.</p>
                    <p>Uno de los platos bandera es el Juane. Nacido en la ciudad de Moyobamba, en la selva alta del Perú, este sabroso guiso de gallina, sazonado con especias y cubierto por hojas de bijao, es un verdadero manjar por su especial gusto, suave aroma y singular presentación. Si bien se disfruta durante todo el año, es en la tradicional Fiesta de San Juan en la que se prepara con mayor esmero.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/juaneGallinaPlatillp.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tacu tacu</h3>
                    <p class="fst-italic">Tacu-Tacu es una receta típica peruana que se originó como una manera de utilizar el arroz y los frijoles sobrantes.</p>
                    <p>El arroz sobrante se mezcla con el frijol Canario cocido y sazonado, y luego se fríe en una sartén para hacer una tortilla grande.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/tacutacuPlatillo.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Eventos</h2>
          <p>Organiza tus eventos con nosotros</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/FiestaCumpleaños.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Fiestas de Cumpleaños</h3>
                  <div class="price">
                    <p><span>S/.350</span></p>
                  </div>
                  <p class="fst-italic">
                    Celebra tus fiestas de cumpleaños con nosotros. Tu mejor opción...
                    Te ofrecemos:
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Bocaditos (dulce y salado).</li>
                    <li><i class="bi bi-check-circle"></i> Adornos de cumpleaños.</li>
                    <li><i class="bi bi-check-circle"></i> Torta con nombre del cumpleañero y vela.</li>
                  </ul>
                  <p>
                    Somos tu mejor opción, no pierdas la oportunidad de celebrar tu cumpleaños en el mejor restaurante.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Fiestas Privadas</h3>
                  <div class="price">
                    <p><span>S/.300</span></p>
                  </div>
                  <p class="fst-italic">
                    Organiza tus privados y disfruta de la mejor comida en compañía de tus amigos.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Acceso privado y selectivo a disposición.</li>
                    <li><i class="bi bi-check-circle"></i> Comida para 8 personas.</li>
                    <li><i class="bi bi-check-circle"></i> Diversión garantizada con la mejor música.</li>
                  </ul>
                  <p>
                    No dejes pasar esta oportunidad de celebrar en compañía de tus seres queridos.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/FiestaTematica.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Fistas con Temática</h3>
                  <div class="price">
                    <p><span>S/.500</span></p>
                  </div>
                  <p class="fst-italic">
                    Las mejores fiestas con temática, con más de 2 años de experiencia organizando eventos personalizados.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Temática del local a elección.</li>
                    <li><i class="bi bi-check-circle"></i> Comida para 10 personas.</li>
                    <li><i class="bi bi-check-circle"></i> Diversión garantizada con DJ en vivo.</li>
                  </ul>
                  <p>
                    No te puerdas de las mejores temáticas que podrás ver.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Events Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Fotos</h2>
          <p>Algunas fotos del restaurante</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/Local1.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/Local1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/Local2.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/Local2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/Local3.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/Local3.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/Local4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/Local4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/Local5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/Local5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/Local6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/Local6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/Local7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/Local7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/Local8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/Local8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactos</h2>
          <p>Contáctenos</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <!-- <iframe src="" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

        <iframe style="border:0; width: 100%; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d586.7561157600616!2d-74.52741900456351!3d-8.38110093916379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a3bceb67eae739%3A0xc8029961f51f1b9b!2sJr.%20Arica%2C%20Pucallpa%2025001%2C%20Per%C3%BA!5e0!3m2!1ses-419!2sbg!4v1668485660657!5m2!1ses-419!2sbg" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>Dirección aquí</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Horarios:</h4>
                <p>
                  Lunes - Domingo:<br>
                  11:00 AM - 10:00 PM
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="info">
              <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Correo:</h4>
                  <p>email@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Celular:</h4>
                  <p>+51 924 667 644</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Nombre aqui</h3>
              <p>
                Dirección <br>
                Aquí, Perú<br><br>
                <strong>Celular:</strong> +51 924 667 644<br>
                <strong>Correo:</strong> email@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#footer" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#footer" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#footer" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#footer" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#footer" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Enlaces</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Acerca de</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#footer">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#footer">Política de Privacidad</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Nombre Aqui</span></strong>. Todos los derechos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>