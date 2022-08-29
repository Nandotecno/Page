<?php
session_start();
isset($_GET['p']) ? $pagina = $_GET['p'].".php" : $pagina = "inicio.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sá e Ferreira Advogados Associados</title>
  <meta name="description" content="Serviços de advogados em Santos">
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="./assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="./assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.css" rel="stylesheet">
  <link href="./assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <style>
  .fra{
    width: 500px;
  }
  @media (max-width: 400px){
  .fra{
    width: 90%;
  }}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-199563916-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-199563916-1');
  gtag('config', 'AW-351170203');
  gtag('config', 'AW-351170203/K09OCKUFEJvduacB', {
    'phone_conversion_number': '(13) 3223-7001'
  });
</script>

</head>

<body>
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">
     
      <a href="inicio" class="logo"><img src="./assets/img/logo-w.png" alt="Logotipo Sá e Ferreria" class="img-responsive"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="inicio">Início</a></li>
          <li><a href="inicio#about">Sobre</a></li>
          <li><a href="inicio#services">Áreas de Atuação</a></li>   
          <li><a href="inicio#team">Equipe</a></li>        
          <li><a href="inicio#estrutura">Estrutura</a></li>
          <li><a href="inicio#about-boxes">Artigos</a></li>
          <li><a href="inicio#contact">Contato</a></li>
        </ul>
      </nav>
     
    </div>
  </header>

<?php
file_exists($pagina) ? include_once $pagina : include_once 'inicio.php';

  $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
  $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
  $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
  $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
  $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
  $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
  $symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
  if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
      $whatsapp = "api";
      } else {
      $whatsapp = "web" ;
      echo "<a style='right: 5px;bottom: 80px; position: fixed; z-index:9999;' href='https://".$whatsapp.".whatsapp.com/send?phone=5513974060774' target='_blank'><img src='./assets/img/whats-logo.png' width='210'></a>";
}
?>
<a style='left: 5px;bottom: 130px; position: fixed; z-index:9999;' href="/en"> <img src="../assets/img/english.png" width="50"></a>
<a style='left: 5px;bottom: 80px; position: fixed; z-index:9999;' href="/es"> <img src="../assets/img/spanish.png" width="50"></a>
 <?php include_once 'footer.php'; ?>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>   
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="./assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>
  <script src="./assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="./assets/vendor/counterup/counterup.min.js"></script>
  <script src="./assets/vendor/venobox/venobox.js"></script>
  <script src="./assets/vendor/owl.carousel/owl.carousel.js"></script>
  <script src="./assets/vendor/isotope-layout/isotope.pkgd.js"></script>
  <script src="./assets/vendor/aos/aos.js"></script>
  <script src="./assets/js/main.js"></script>

</body>

</html>