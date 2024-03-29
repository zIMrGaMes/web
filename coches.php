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
?>
   <section id="coches" class="dark_bg_blue layout_padding cross_layout padding_top_0">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="full center">
                 <h2 class="heading_main orange_heading">Coches</h2>
               </div>
             </div>
           </div>
           <div class="row">
              <div class="col-lg-4">
                 <div class="full">
                    <div class="choose_blog text_align_center">
                        <img src="
                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 1";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['imagen'];
                                       }
                                    ?>" />
                        <h4>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 1";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['marca'];
                                          echo " ";
                                          echo $row['modelo'];
                                       }
                                    ?></h4>
                        <p>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 1";
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
                    <img src="
                    <?php
                                       $sql = "SELECT * FROM coches WHERE id = 2";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['imagen'];
                                       }
                                    ?>" />
                        <h4>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 2";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['marca'];
                                          echo " ";
                                          echo $row['modelo'];
                                       }
                                    ?></h4>
                        <p>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 2";
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
                    <img src="
                    <?php
                                       $sql = "SELECT * FROM coches WHERE id = 3";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['imagen'];
                                       }
                                    ?>" />
                        <h4>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 3";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['marca'];
                                          echo " ";
                                          echo $row['modelo'];
                                       }
                                    ?></h4>
                        <p>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 3";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['texto'];
                                       }
                                    ?></p>
                    </div>
                 </div>
              </div>
              <div class="col-md-12 margin_top_30">
              </div>
           </div>
           <div class="row">
           <div class="col-lg-4">
                 <div class="full">
                    <div class="choose_blog text_align_center">
                        <img src="
                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 4";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['imagen'];
                                       }
                                    ?>" />
                        <h4>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 4";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['marca'];
                                          echo " ";
                                          echo $row['modelo'];
                                       }
                                    ?></h4>
                        <p>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 4";
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
                    <img src="
                    <?php
                                       $sql = "SELECT * FROM coches WHERE id = 5";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['imagen'];
                                       }
                                    ?>" />
                        <h4>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 5";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['marca'];
                                          echo " ";
                                          echo $row['modelo'];
                                       }
                                    ?></h4>
                        <p>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 5";
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
                    <img src="
                    <?php
                                       $sql = "SELECT * FROM coches WHERE id = 6";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['imagen'];
                                       }
                                    ?>" />
                        <h4>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 6";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['marca'];
                                          echo " ";
                                          echo $row['modelo'];
                                       }
                                    ?></h4>
                        <p>                        <?php
                                       $sql = "SELECT * FROM coches WHERE id = 6";
                                       foreach ($pdo->query($sql) as $row) {
                                          echo $row['texto'];
                                       }
                                    ?></p>
                    </div>
                 </div>
              </div>
            </div>
        </div>
      </section>
   </body>
</html>