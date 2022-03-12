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
           <!-- Gracias por contactarnos. Nos pondremos en contacto contigo en cuanto nos sea posible. Un saludo -->
  
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
                        <li><img style="margin-right: 15px;" src="images/phone_icon.png" alt="#" /><a href="#">
                        <?php
                                       $sql = "SELECT * FROM datos_contacto WHERE id = 1";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['telefono'];
                                       }
                                    ?>
                        </a></li>
                        <li><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#" /><a href="#">
                        <?php
                                       $sql = "SELECT * FROM datos_contacto WHERE id = 1";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['correo'];
                                       }
                                    ?>
                        </a></li>

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
   </body>
</html>