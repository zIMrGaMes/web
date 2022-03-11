<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Brum Brum</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
   <?php
   include "db/include/db.php";
                           if(isset($_POST['submit'])){
                              // Fetching variables of the form which travels in URL
                                 $nom = $_POST['nombre'];
                                 $email = $_POST['email'];
                                 $telefono = $_POST['telefono'];
                                 $mensaje = $_POST['mensaje'];
                                 $statement = $pdo->prepare("INSERT INTO contacto (nombre, email, telefono, mensaje)
                                 VALUES (?, ?, ?, ?)");
                                 $statement ->bindParam(1, $nom);
                                 $statement ->bindParam(2, $email);
                                 $statement ->bindParam(3, $telefono);
                                 $statement ->bindParam(4, $mensaje);
                                 
                                 if ($statement->execute()){
                                    header("Location: gracias.php");
                                 };
                           }

                           ?>

      <!-- loader  
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      end loader -->
   
   <div class="wrapper">

      <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#home">Página principal</a>
                </li>
                <li>
                    <a href="about/index.php">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="#por_que_elegirnos">¿Por que elegirnos?</a>
                </li>
                <li>
                    <a href="#testimonial">Testimonios</a>
                </li>
                <li>
                    <a href="about/index.php">Contáctanos</a>
                </li>
            </ul>

        </nav>
      </div>


      <div id="content">


      <!-- section -->
      <section id="home" class="top_section">
         <div class="row">
            <div class="col-lg-12">
               <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="right_header_info">
                     <ul>
                        <li><img style="margin-right: 15px;" src="images/phone_icon.png" alt="#" /><a href="#">+34  687005345</a></li>
                        <li><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#" /><a href="#">info@brumbrummotors.com</a></li>
                        <li><img src="images/search_icon.png" alt="#" /></li>
                         <li>
                           <button type="button" id="sidebarCollapse">
                              <img src="images/menu_icon.png" alt="#" />
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <section>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h4>Bienvenido a:</h4>
                     <h3>Brum Brum</h3>
                     <p>En este concesionario podrás encontrar todo tipo de coches (Deportivos, eléctricos, híbridos, confort, etc)</p>
                     <div class="button_section">
                        <a href="coches.php">Coches</a>
                        <a href="about/index.php">Sobre la empresa</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                 <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="images/slider_1.png" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="images/slider_2.png" alt="#" />
                        </div>
                     </div>
                     <div class="full center">
                        <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                          <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#slider_main" data-slide="next">
                          <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end header -->
            </div>
         </div>
      </section>
      <!-- end section -->
      
      <!-- section --> 
      <div id="about" class="section layout_padding">
         <div class="container">
            
            <div class="row">

                 <div class="col-lg-4 margin_top_30">
               <div class="full margin_top_30">
                  <h3 class="main_heading _left_side margin_top_30">Sobre Nosotros</h3>
                  <p class="large">Somos un concesionario que vende todo tipo de coches.</p>
               </div>
               <div class="full button_section margin_top_30">
                        <a href="#">Leer mas</a>
                     </div>
            </div>

            <div class="col-lg-8">
               <div class="full margin_top_50_rs">
                  <img class="img-responsive" src="images/about_us.png" alt="#" />
               </div>
            </div>

               </div>

         </div>
      </div>
      <!-- end section -->

      <!-- section --> 
      <div class="section layout_padding padding_top_0">
         <div class="container">
            
            <div class="row">

              <div class="col-lg-8">
               <div class="full text_align_right r-img">
                  <img class="img-responsive" src="images/about_us_2.png" alt="#" />
               </div>
            </div>

                 <div class="col-lg-4 margin_top_30">
               <div class="full margin_top_30">
                  <h3 class="main_heading _left_side margin_top_30">Nuestros coches</h3>
                  <p class="large">Aqui podras encontrar nuestra amplio catálogo</p>
               </div>
               <div class="full button_section margin_top_30">
                    <a href="#">Ver mas</a>
                  </div>
            </div>

               </div>

         </div>
      </div>
      <!-- end section -->

      <!-- section -->
      <section id="por_que_elegirnos" class="dark_bg_blue layout_padding cross_layout padding_top_0">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="full center">
                 <h2 class="heading_main orange_heading">Por que elegirnos</h2>
               </div>
             </div>
           </div>
           <div class="row">
              <div class="col-lg-4">
                 <div class="full">
                    <div class="choose_blog text_align_center">
                        <img src="
                        <?php
                                       $sql = "SELECT * FROM elegirnos WHERE id = 1";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['imagen'];
                                       }
                                    ?>" />
                        <h4>                        <?php
                                       $sql = "SELECT * FROM elegirnos WHERE id = 1";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['tipo'];
                                       }
                                    ?></h4>
                        <p>                        <?php
                                       $sql = "SELECT * FROM elegirnos WHERE id = 1";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['texto'];
                                       }
                                    ?></p>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="full">
                    <div class="choose_blog text_align_center">
                        <img src="images/c2_icon.png" />
                        <h4>AMPLIA GAMA DE MARCAS</h4>
                        <p>Trabajamos con todo tipo de marcas de coches.</p>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="full">
                    <div class="choose_blog text_align_center">
                        <img src="images/c3_icon.png" />
                        <h4>CONFIADO POR MILES</h4>
                        <p>Llevamos mas de 7 años en el mercado y estamos recomendados por miles de clientes.</p>
                    </div>
                 </div>
              </div>
              <div class="col-md-12 margin_top_30">
                <div class="full center button_section margin_top_30">
                    <a class="margin_top_30" href="">Leer mas</a>
                  </div>
              </div>
           </div>
        </div>
      </section>
      <!-- end section -->

       <!-- section -->
      <section id="testimonial" class="dark_bg_orange layout_padding cross_layout_o padding_top_0">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="full center">
                 <h2 class="heading_main orange_heading">Testimonios</h2>
               </div>
             </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                <div class="full">
                  <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                           <ul class="carousel-indicators">
                               <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                               <li data-target="#testimonial_slider" data-slide-to="1"></li>
                               <li data-target="#testimonial_slider" data-slide-to="2"></li>
                           </ul>
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="testomonial_section">
                              <div class="full center">
                                <div class="client_img">
                                  <img src="                                
                                  <?php
                                       $sql = "SELECT * FROM opiniones WHERE id = 3";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['imagen'];
                                       }
                                    ?>" alt="#" />
                                </div>
                              </div>
                              <div class="full testimonial_cont text_align_center">
                                <p><strong>
                                <?php
                                       $sql = "SELECT * FROM opiniones WHERE id = 3";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['nombre'];
                                       }
                                    ?>

                                </strong><br><strong class="ornage_color">
                                <?php
                                       $sql = "SELECT * FROM opiniones WHERE id = 3";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['trabajo'];
                                       }
                                    ?>
                                </strong><br><i>
                                <?php
                                       $sql = "SELECT * FROM opiniones WHERE id = 3";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['texto'];
                                       }
                                    ?>
                                </i></p>
                                <div class="full text_align_center margin_top_30">
                                   <img src="images/testimonial_qoute.png">
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
      </section>
      <!-- end section -->

      <!-- section -->
      <section id="contact" class="dark_bg_blue layout_padding cross_layout padding_top_0 margin_top_0">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="full center">
                 <h2 class="heading_main orange_heading">Contáctanos</h2>
               </div>
               
             </div>
           </div>
           <div class="row">
                <div class="main">
                    <div class="contact_form">
                        <form method="POST" action="index.php">
                          <?php
                           

                           $nom="";
                           $email="";
                           $telefono="";
                           $mensaje="";

                           if (isset($_GET['id'])){
                              $id = $_GET['id'];
                              $statement = $pdo->prepare("SELECT * FROM contacto");
                              $statement->bindParam(1, $id);
                              if ($statement->execute()) {

                                 foreach ($statement->fetchAll() as $row) {
                                    $nom = $row['nom'];
                                    $email = $row['email'];
                                    $telefono = $row['telefono'];
                                    $mensaje = $row['mensaje'];
                                 }
                              }
                           }
                           ?>
                           <div class="full field">
                              <input id="name" name="nombre" placeholder='Nombre' type='text' value="<?php echo $nom ?>">
                           </div>
                           <div class="full field">
                              <input id="name" name="email" placeholder='Email' type='text' value="<?php echo $email ?>">
                           </div>
                           <div class="full field">
                              <input id="name" name="telefono" placeholder='Teléfono' type='text' value="<?php echo $telefono ?>">
                           </div>
                           <div class="full field">
                              <input id="name" name="mensaje" placeholder='Mensaje' type='text' value="<?php echo $mensaje ?>">
                           </div>
                           <div class="full center">
                              <input id='btn' name="submit" type='submit' value='Guardar'>
                           </div>

                     </form>
                 </div>
              </div>
            </div>
        </div>
      </section>
      <!-- end section -->

      <!-- footer -->
      <footer>
         <div class="container">
           <div class="row">
              <div class="col-md-6">
                <div class="full">
                  <h3>Brum Brum MOTORS</h3>
                </div>
              </div>
              <div class="col-md-6">
                <div class="full">
                   <ul class="social_links">
                      <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                      <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                   </ul>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="full">
                   <h4 class="widget_heading">Enlaces de interés</h4>
                 </div>
                 <div class="full f_menu">
                    <ul>
                       <li><a href="about/index.php">Sobre nosotros</a></li>
                       <li><a href="coches.php">Nuestros coche</a></li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="full">
                   <h4 class="widget_heading">Contacto</h4>
                   <div class="full cont_footer">
                     <p><strong>Brum Brum Motors: Dirección postal</strong><br><br>Calle Era 28, 07198, España<br>Teléfono: +34 683 23 35 54<br>info@brumbrummotors.com</p>
                   </div>
                 </div>
              </div>
           </div>
         </div>
      </footer>
      <!-- end footer -->

      <!-- copyright -->

      <div class="cpy_right">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <p>© 2022 Todos los derechos reservados. Diseñado por <a href="https://html.design">Brum Brum Motors</a></p>
                     </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- right copyright -->

   </div>
</div>

   <div class="overlay"></div>
      
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>
    

   </body>
</html>